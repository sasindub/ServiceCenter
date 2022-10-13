<?php

session_start();
require_once 'C:\xampp\htdocs\Service Center\app\includes\config.php';
require_once 'C:\xampp\htdocs\Service Center\app\includes\database.php';




class User extends Database{
	private $obj;
	private $conn;
    public function __construct()
    {
        require_once 'C:\xampp\htdocs\Service Center\app\includes\config.php';
        require_once 'C:\xampp\htdocs\Service Center\app\includes\database.php';

		$this->obj = new DataBase();
		$this->conn = $this->obj->db;


    }

	//send email(otp) to the user
     function sendOtp(){
            extract($_POST);
            $_SESSION['randomNum'] = rand(1000,9999);

			$to = $email;
			$mail_subject = "E-mail verification";
			$email_body = "Your e-mail verification code: ".$_SESSION['randomNum'];

			$header = "From: Service Center";

			$send_mail_result=mail($to, $mail_subject, $email_body, $header);
		   
			if($send_mail_result)
			{
				return 1;
				
			}
			else{
				return 2;
				
			}
    }

	//confirm otp
	function confirmOtp(){
		extract($_POST);
		if( $otp == $_SESSION['randomNum']){
			return 1;
		}else{
			return 2;
		}
	}

	//request confirm
	function requestConfirm(){
		extract($_POST);

		// insert into client table
		$sql = "INSERT INTO client(pid,email,name,address,mobile) VALUES (?,?,?,?,?)";
		//insert into project table
		$sql1 = "INSERT INTO project(type,duration,budget,description) VALUES (?,?,?,?)";
		try{

			
			$stmt1 = $this->conn->prepare($sql1);
			//bind param
			$stmt1->bindParam(1,$type);
			$stmt1->bindParam(2,$duration);
			$stmt1->bindParam(3,$price);
			$stmt1->bindParam(4,$desc);

			$stmt1->execute();


			//get the project id
			$sqlgetId = "SELECT pid from project ORDER BY pid DESC LIMIT 1;";
			$stmtgetId = $this->conn->prepare($sqlgetId);
			$stmtgetId->execute();
			$data = $stmtgetId->fetch();

			
				$stmt = $this->conn->prepare($sql);
			
				//bind param
				$stmt->bindParam(1,$data['pid']);
				$stmt->bindParam(2,$email);
				$stmt->bindParam(3,$name);
				$stmt->bindParam(4,$address);
				$stmt->bindParam(5,$mobile);	
			

			if($stmt->execute()){
				return 1;
			}else{
				return 2;
			}


		}
		
		catch(PDOException $e){
			echo "Error: ".$e->getMessage();
			$this->conn->rollBack();
		}

	
	}
}