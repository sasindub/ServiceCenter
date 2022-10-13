<?php 

    require_once 'C:\xampp\htdocs\Service Center\app\includes\user.php';
    require_once 'C:\xampp\htdocs\Service Center\app\includes\admin.php';
    require_once 'C:\xampp\htdocs\Service Center\app\includes\employer.php';

    $action = $_GET['action'];

    $obj = new User();
    $objAdmin = new Admin();
    $objEmp = new Employer();

 
    //send email (otp) and verify otp
    if($action == 'user' || $action == 'otpVerify'){
       if($action == 'user'){ //if send email
            $method = $obj->sendOtp(); //assign the send otp method from user.php
                if($method){
                    echo $method; //return the function output
                }
        }
        else{
            $method= $obj->confirmOtp(); //assign the confirm otp method from user.php
            if($method){
                echo $method; //return the function output
            }
        }
    }

    //submit buyer request
    if($action == 'request'){
        $method = $obj->requestConfirm();//assign the request confirm method to $method
        if($method){
            echo $method;//return the function output
        }
    }

    //admin login adminLogin

    if($action == 'adminLogin'){
        $method = $objAdmin->adminLogin();//assign the adminLogin method to $method
         if($method){
             echo $method;
         }
     }

    //get all project details
    if($action == 'projectData'){
       $method = $objAdmin->getProjectData();//assign the rgetproject method to $method
        if($method){
            echo $method;
        }
    }

    

     //assign employers
     if($action == 'assignEmp'){
        $method = $objAdmin->assignEmp();//assign the assign Emp method to $method
         if($method){
             echo $method;
         }
     }

       //get the request count
       if($action == 'reqCount'){
        $method = $objAdmin->reqCount();//assign the reqCount method to $method
         if($method){
             echo $method;
         }
     }

      //get the project count
      if($action == 'projectCount'){
        $method = $objAdmin->projectCount();//assign the projectCount method to $method
         if($method){
             echo $method;
         }
     }

     //employer

        //employer login
        if($action == 'empLogin'){
            $method = $objEmp->empLog();//assign the empLog method to $method
             if($method){
                 echo $method;
             }
         }

           //start emp session
        if($action == 'empSession'){
            $method = $objEmp->empSession();//assign the empSession method to $method
             if($method){
                 echo $method;
             }
         }

         //get count of projects of employer
        
         if($action == 'empProject'){
            $method = $objEmp-> projectCount();//assign the method to $method
             if($method){
                 echo $method;
             }
         }

         //get current project count
         
         if($action == 'currentProject'){
            $method = $objEmp->currentCount();//assign the method currentCount() to $method
             if($method){
                 echo $method;
             }
         }

         //get all the projects
         if($action == 'getProject'){
            $method = $objEmp->getProjects();//assign the method currentCount() to $method
             if($method){
                 echo $method;
             }
         }

         //update status of project
         if($action == 'acceptProject'){
            $method = $objEmp->acceptProject();//assign the method acceptProject() to $method
             if($method){
                 echo $method;
             }
         }

            //update status of project
            if($action == 'getCurrentProject'){
                $method = $objEmp->getCurrentProject();//assign the method getCurrentProject() to $method
                 if($method){
                     echo $method;
                 }
             }