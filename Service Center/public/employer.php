<!DOCTYPE html>
<html>
<head>
<title>Service Center | employer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/admin.css" />

<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>
<body>

   <!-- nav bar -->
        <!-- As a link -->
        <nav class="navbar navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#"><div class="row" style="margin-left: -110px;">
                <div class="col-3">
                    <img src="assets/images/lgo.png" alt="" class="pt-2 float-start"  style="width: 50px;">
                </div>
                <div class="col-9 float-start">
                    <h4 class="float-start mt-2">Service Center <br> <span style="font-size:15pt; opacity: 0.8;">Employer</span></h4>
                </div>
                </div>
            </a>
        
             <div class="nav row rounded-1 border border-2" style="margin-right:350px;">
                <div class="col-6 text-center pt-2 pb-2 navItem navItemS" id="nprojectBtn">
                <span class="">New projects
                    <span class="rounded-pill ps-1 pe-1" id="pcnt" style="color:white; background-color: red;">20</span>
                </span> 
                </div>
                <div class="col-6 text-center pt-2 pb-2 navItem" style="border-right: 0px;" id="cprojectBtn">
                    <span class="">Current projects
                      <span class="rounded-pill ps-1 pe-1" id="ccnt" style="color:white; background-color: green;">10</span>
                    </span> 
                </div>
             </div>

             <div class="navbar-brand" href="#"><div class="row" style="margin-right: -110px;">
                <div class="col-3">
                    <img src="assets/images/icon.png" alt="" class="float-start"  style="width: 35px;">
                </div>
                <div class="col-9 float-start ">
                    <span class="mt-2 ps-3" id="empname" style="font-size: 14pt;">s</span>
                </div>
                </div>
            </div>

        </div>
        </nav>
      
        <!-- nav bar end -->
        <div class="container">
            <div class="row pb-2 pt-3 shadow" style="border-bottom-left-radius: 20px;  border-bottom-right-radius: 20px;">

                <div class="col-3">
                    <img src="assets/images/icon.png" alt="" class=""  style="width: 80px;">
                 </div>

                <div class="col-3" style="margin-left:-180px;">
                    <div class="row mt-2">
                        <div class="col-12">
                                <span style="font-size:16pt; font-weight: 500; float:left; opacity:0.6;" id="nme"></span>
                        </div>
                        <div class="col-12">
                        <span style="font-size:13pt; font-weight: 500; opacity:0.6;" id="mail"></span>
                        </div>
                    </div>
                </div>

                <div class="col-3 mt-4 " style="margin-left:150px;">
                <span style="font-size:13pt; font-weight: 500; opacity:0.6;" class=""><i class="fa-solid fa-phone"></i> <span class="me-1" id="mobile"></span></span>
                </div>

                <div class="col-3 mt-4 " style="margin-left:30px;">
                <span style="font-size:13pt; font-weight: 500; opacity:0.6;" class=""><i class="fa-sharp fa-solid fa-layer-group"></i> <span class="me-1" id="position"></span></span>
                </div>



            </div>
        </div>
        <!-- emp details -->
        <div>

        </div>

        <!-- new projects -->
        <div class="container mt-5" id="project">
          


           
        </div>

        <!-- current projects -->

        <div class="container mt-5" id="cprojects">
        
        </div>
        

    
         <!-- bootstrap JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>



    


<script src="js/employer1.js"></script>

</body>
</html>