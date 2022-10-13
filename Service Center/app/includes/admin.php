<?php

require_once 'C:\xampp\htdocs\Service Center\app\includes\config.php';
require_once 'C:\xampp\htdocs\Service Center\app\includes\database.php';

class Admin extends Database{
    function __construct()
    {
        require_once 'C:\xampp\htdocs\Service Center\app\includes\config.php';
        require_once 'C:\xampp\htdocs\Service Center\app\includes\database.php';

		$this->obj = new DataBase();
		$this->conn = $this->obj->db;
    }

    //admin login
    function adminLogin(){
        extract($_POST);

        try{
            $sql = "SELECT password from admin where user = '$id'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->rowCount();
            $data = $stmt->fetch();
            if($row > 0){
                if($pass == $data['password']){
                    return 1;
                }else{
                    return 2;
                }
            }else{
                return 2;
            }
        }catch(PDOException $e){
            echo $e;
        }


    }

    //get the all project details
    function getProjectData(){

        try{
            //get the client data
            $sql = "SELECT * from client where status = ''";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->rowCount();
            
            if($row > 0){
                while($data = $stmt->fetch()){
                    $pid = $data['pid'];
                    // get the project data of the client
                    $sql1 = "SELECT * from project where pid = '$pid'";
                    $stmt1 = $this->conn->prepare($sql1);
                    $stmt1->execute();
                    $data1 = $stmt1->fetch();
                
                    $details=  ' <div class="shadow container p-4 rounded-3 mb-3">
                    <!-- header -->
                    <div class="row">
                        <div class="col-6 row">
                            <div class="col-6">
                                <img src="assets/images/icon.png" alt="" class="pt-2 float-start"  style="width: 50px; border-radius: 50%; object-fit: cover;">
                                <div class="float-start ms-3 mt-2"><span style="font-size:13pt; font-weight: 400;">'.$data['name'].'</span> <br>'.$data['email'].'</div>
                               
                            </div> 
              
                        </div>
                        <div class="col-6">
                                <span class="float-end mt-1">'.$data1['type'].'</span>
                        </div>
                    </div>
            
                    <!-- middle -->
                    <div class="mt-4">
                        <p>'.$data1['description'].'</p>
                    </div>
            
                    <!-- end -->
                    <div class="mt-4 row" style="border-bottom: 1px solid rgb(230, 230, 230);">
                        <div class="col-6 pb-3">
                        <span class="float-start" style="font-weight: 600; opacity: 0.6;"><i class="fa-solid fa-coins me-2"></i> budget: '.$data1['budget'].'</span><br>
                            <span class="float-start mt-2" style="opacity: 0.6;"><i class="fa-solid fa-phone me-2"></i> Mobile: '.$data['mobile'].'</span>
                        </div>
                        <div class="col-6 pb-3">
                            <span class="float-end" style="font-weight: 600; opacity: 0.6;"><i class="fa-solid fa-hourglass-start me-2"></i> duration: '.$data1['duration'].'</span>
                           
                        </div>
            
                    </div>
            
                    <div class="mt-3">
                            <span style="font-weight: 600;">Assign Project</span>
            
                            <div class="row">
                                <div class="col-6">
                                    <select class="rform-input" name="emp" id="'.'emp'.$data['pid'].'">
                                        <option value="0">Select an employer</option>

                                        ';

                                        echo $details;

                                      
                                        //get employees details
                                        $sqlEmp = "SELECT * from developer";
                                        $stmtEmp = $this->conn->prepare($sqlEmp);
                                        $stmtEmp->execute();
                                        $rows = $stmtEmp->rowCount();

                                        while($dataEmp = $stmtEmp->fetch()){
                                            echo //' <option value="0">Select an employer</option>';
                                           '<option value="'.$dataEmp['id'].'">'.$dataEmp['name'].' - '.$dataEmp['email'].' - '.$dataEmp['mobile'].' - '.$dataEmp['position'].'</option>';
                                       }

                                       $details1 = '
                    
                                    </select>
                                </div>
                                <div class="col-6 mt-2">
                                   <button class="btn btn-outline-primary float-end assign" id="'.$data['pid'].'">Assign</button>
                                </div>
                            </div>
                    </div>
                </div>
                
                ';

                echo $details1;
                }
            }else{

                echo ' <img src="assets/images/nodata.webp" alt="" style="width:10%; margin-left:570px; margin-top:150px;">';
            }

        }catch(PDOException $e){
            echo $e;
        }

      
    }

    //assign employers (update table)
    function assignEmp(){
        extract($_POST);
        try{
              //update table
              $sql = "UPDATE project set devId = '$emp' WHERE pid = '$pid'";
              $stmt = $this->conn->prepare($sql);
              $stmt->execute();

              $sql1 = "UPDATE client set status = 'assigned' WHERE pid = '$pid'";
              $stmt1 = $this->conn->prepare($sql1);
              $stmt1->execute();

              echo "done";

        }catch(PDOException $e){
        echo $e;
        }
    }

    //get rquest count
    function reqCount(){
        try{
            //update table
            $sql = "SELECT COUNT('id')as counting FROM client where status = ''";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetch();

            echo $data['counting'];

        }catch(PDOException $e){
                echo $e;
            }
    }

    //get project count
    function projectCount(){
        try{
            //update table
            $sql = "SELECT COUNT('id')as counting FROM client where status = 'assigned'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetch();

            echo $data['counting'];

        }catch(PDOException $e){
                echo $e;
            }

    }
}