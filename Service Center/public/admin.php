<!DOCTYPE html>
<html>
<head>
<title>Service Center | Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/admin.css" />

<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<link rel="stylesheet" href="css/style.css" />
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
                    <h4 class="float-start mt-2">Service Center <br> <span style="font-size:15pt; opacity: 0.8;">Admin Panel</span></h4>
                </div>
                </div>
            </a>
        
             <div class="nav row rounded-1 border border-2">
                <div class="col-6 text-center pt-2 pb-2 navItem navItemS">
                <span class="">Buyer Requests
                    <span class="rounded-pill ps-1 pe-1" id="breq" style="color:white; background-color: red;"></span>
                </span> 
                </div>
                <div class="col-6 text-center pt-2 pb-2 navItem" style="border-right: 0px;">
                    <span class="">Projects
                      <span class="rounded-pill ps-1 pe-1" id="pcount" style="color:white; background-color: green;"></span>
                    </span> 
                </div>
             </div>
        </div>
        </nav>
      
        <!-- nav bar end -->

        <div class="container mt-5" id="projects">
           
        </div>
        

    
         <!-- bootstrap JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<script src="js/admin01.js"></script>

    

</script>

</body>
</html>