<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Center | Employer Login</title>

    <link rel="stylesheet" href="css/emplog.css" />

    <!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
<div id="container">
  <div id="left">

  </div>
  <div id="right">
    <h1 id="login">LogIn</h1><br>

    <span id="errormsg" style="color:red; margin-left:100px;"></span>
    <input type="email" id="email" name="email" class="client-info">
    <label for="email">Email</label>
    <input type="password" id="pass" name="pass" class="client-info">
    <label for="password">Password</label>
    <input type="submit" id="submit" name="submit" class="client-info" value="Submit">
  </div>
</div>



<script>
       /* Work in proggress */
document.getElementById('see-button').addEventListener('click', evt => {
	document.getElementById('blur-work').style.display = 'none';
})
   /* Work in proggress */
</script>

<script src="js/empLog1.js"></script>


</body>
</html>