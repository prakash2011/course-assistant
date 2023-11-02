<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login CA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!doctype html>
<html lang="ar" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.rtl.min.css" integrity="sha384-5/ZcxA7Dub2FNG09dHw8CHmPN7Fz6ASlweagj0nuXjmMyupgH9n9F5Hd926zsu3/" crossorigin="anonymous">

    <title> Login </title>
  </head>
  <body>
    
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
    -->
  </body>
</html>
    
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD" ] == "POST"){
  $login= false;
  
  include 'partial/_dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];

 
$sql ="select*from users WHERE  username='$username' ";

$result=mysqli_query($conn,$sql);
$num = mysqli_num_query($result);  
echo $num;
  
if($num ==1){
  while($row=mysqli_fetch_assoc($result)){
   if($password_verify($password,$row['password'])){
    $login =true;
    session_start();
  $_SESSION['loggedin']=true;
 $_SESSION['username']=$username;
 header("location : welcome.php");
}
  }
}

  else{
  $showError = "Inavalid credentials";
  }

}

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>
<!doctype html>
<html lang="ar" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.rtl.min.css" integrity="sha384-5/ZcxA7Dub2FNG09dHw8CHmPN7Fz6ASlweagj0nuXjmMyupgH9n9F5Hd926zsu3/" crossorigin="anonymous">

    <title>login</title>
  </head>
  <body>
  <img class="bg" src="img3.avif" alt="course assistant">
    <?php require 'partial_nav.php'?>
   
    
    

     <div class="container ">
        <h1 class= "text-center"> LOGIN  TO OUR WEBSITE.</h1>
        <form action="/loginsystem/login.php" method="post">
  <div class="mb-3 col-md-7">
    <label for="username" class="form-label">username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your username with anyone else.</div>
  </div>
  <div class="mb-3 col-md-7">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password" name="Password">
  </div>
  
    <div id="emailHelp" class="form-text"> make sure to type the same password.</div>
  </div>
  
  <button type="submit " class="btn  btn-primary">login</button>
</form>

    
    
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
    -->
  </body>
</html>
    
</body>
</html>