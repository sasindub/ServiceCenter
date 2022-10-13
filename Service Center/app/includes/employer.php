<?php

require_once 'C:\xampp\htdocs\Service Center\app\includes\config.php';
require_once 'C:\xampp\htdocs\Service Center\app\includes\database.php';

class Employer extends Database{
    function __construct()
    {
        require_once 'C:\xampp\htdocs\Service Center\app\includes\config.php';
        require_once 'C:\xampp\htdocs\Service Center\app\includes\database.php';

		$this->obj = new DataBase();
		$this->conn = $this->obj->db;
    }

    //employer login

    function empLog(){
        extract($_POST);

        try{
            $sql = "SELECT password, id from developer where email = '$email'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->rowCount();
            $data = $stmt->fetch();
            if($row > 0){
                if($pass == $data['password']){
                    $_SESSION['empid'] = $data['id'];
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

    //employee session start get employer data
    function empSession(){
        try{
            $id =  $_SESSION['empid'];
            $sql = "SELECT * from developer where id = '$id'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            $data = $stmt->fetch();

            $users_json = json_encode($data);
            echo $users_json;


            

        }catch(PDOException $e){
            echo $e;
        }
    }

    //get count of projects of employer
    function projectCount(){
       
       try{ 
        $id =  $_SESSION['empid'];
        $sql1 = "SELECT COUNT(pid) as pcnt from project where devId = '$id' AND status = '' ";
        $stmt1 = $this->conn->prepare($sql1);
        $stmt1->execute();

        $data1 = $stmt1->fetch();

        $sql2 = "SELECT COUNT(pid) as ccnt from project where devId = '$id' AND status = 'confirmed' ";
        $stmt2 = $this->conn->prepare($sql2);
        $stmt2->execute();

        $data2 = $stmt2->fetch();
    
        $users_json = json_encode($data1+$data2);
        echo $users_json;
    }
        catch(PDOException $e){
            echo $e;
        }
    }

    function currentCount(){
        try{
            $id =  $_SESSION['empid'];
            $sql2 = "SELECT COUNT(pid) as ccnt from project where devId = '$id' AND status = 'accepted' ";
            $stmt2 = $this->conn->prepare($sql2);
            $stmt2->execute();
    
            $data2 = $stmt2->fetch();
        
            echo $data2['ccnt'];
        
        }catch(PDOException){
            
        }
    }

    //get the all assigned projects
    function getProjects(){

        try{
            $id =  $_SESSION['empid'];
            $sql = "SELECT * from project where devId='$id' AND status = ''";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->rowCount();
            
            if($row > 0){
            while($data=$stmt->fetch()){
                echo '  <div class="border border-2 rounded-3 p-4 shadow-sm mb-3">
                <div class="row">
                    <div style="font-size: 13pt;" class="col-2">
                    <span style="font-weight: 500;" class=""><i class="fa-sharp fa-solid fa-file-pen me-3"></i>Request:</span> 
                    </div>
        
                    <div class="col-10 float-end">
                    <span class="float-start">'.$data['description'].'</span>
                    </div>
        
                    <div style="font-size: 13pt;" class="col-2  mt-3">
                        <span style="font-weight: 500;" class=""><i class="fa-sharp fa-solid fa-list me-3"></i>Type:</span> 
                    </div>
        
                    <div class="col-10  mt-3">
                        <span>'.$data['type'].'</span>
                    </div>
        
                    
                    <div style="font-size: 13pt;" class="col-2  mt-3">
                        <span style="font-weight: 500;" class=""><i class="fa-solid fa-coins me-3"></i>Budget: </span> 
                    </div>
        
                    <div class="col-10  mt-3">
                        <span>'.$data['budget'].'</span>
                    </div>
        
        
                    
                    <div style="font-size: 13pt;" class="col-2  mt-3">
                        <span style="font-weight: 500;" class=""><i class="fa-solid fa-hourglass-start me-3"></i>Duration:</span> 
                    </div>
        
                    <div class="col-10  mt-3">
                        <span>'.$data['duration'].'</span>
                        <button class="btn btn-primary mt-4 accept" style="float:right;" id='.$data['pid'].'>Accept</button>
                    </div>
        
                </div>
        
                
           </div>';
            }
            }else{
                echo ' <img src="assets/images/nodata.webp" alt="" style="width:10%; margin-left:570px; margin-top:150px;">';
            }



        }catch(PDOException $e){
            echo $e;
        }
      
    }

    //get current projects
    function getCurrentProject(){
        try{
            $id =  $_SESSION['empid'];
            $sql = "SELECT * from project where devId='$id' AND status = 'accepted'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->rowCount();
            
            if($row > 0){
                while($data=$stmt->fetch()){
                    
                    echo '<div class="border border-2 rounded-3 p-4 shadow-sm mb-3">
                    <div class="row">
                        <div style="font-size: 15pt;" class="col-6">
                        <span style="font-weight: 500;" class=""><i class="fa-solid fa-coins me-3"></i>'.$data['budget'].'</span> 
                        </div>
    
                        <div class="col-6">
                        <span class="badge bg-success float-end" style="font-size: 8pt; font-weight: 400; opacity: 0.8;">on going</span> 
                        </div>
            
                        <div class="col-12 float-start mt-2">
                        <span>'.$data['description'].'</span>
                        </div>
            
                        <div style="font-size: 13pt;" class="col-6 mt-3">
                            <a href="" class="">More Details >></a>
                            </div>
            
                        <div class="col-6 mt-3 float-end">
                        <span style="font-weight: 500; opacity: 0.5;" class="float-end ms-3"><i class="fa-solid fa-hourglass-start me-2"></i>Duration: '.$data['duration'].'</span> 
                       
                        <span style="font-weight: 500; opacity: 0.5;" class="float-end me-5"><i class="fa-sharp fa-solid fa-list me-2"></i>Type: '.$data['type'].'</span> 
                      
                        </div>
    
                        
                        <div class="col-4  mt-3">
                       
                        
                        </div>
            
                    
                    
            
            
                    </div>
            
                    
               </div>';
                }
            }else{
                echo ' <img src="assets/images/nodata.webp" alt="" style="width:10%; margin-left:570px; margin-top:150px;">';

            }
        }catch(PDOException $e){

        }
    }

    //update status of the project
    function acceptProject(){
        extract($_POST);

        try{
            $sql = "UPDATE project set status = 'accepted' where pid = '$pid'";
            $stmt = $this->conn->prepare($sql);
            if($stmt->execute()){
                return 1;
            }else{
                return 2;
            }


        }catch(PDOException $e){
            echo $e;
        }
    }




}