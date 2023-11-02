<?php
if(isset($_POST['Email']))
{
    //BUILD THE SERVER CONNECTION
$Server="localhost";
$database="Sep_login";
$username="root";
$password="";
//CHECK THE SERVER CONNECTION
$con= mysqli_connect($server,$username,$password,$database);
if(!$con){
    die("connection to this database  failed due to ". mysqli_connect_error());
}
else{
    echo"connection is successful.";
}
 
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo $_SERVER["REQUEST_METHOD"] ;
  $login= false;
  $Email=$_POST["Email"];
  echo $Email;
  $Password=$_POST["Password"];
  echo $Password;



  $query = "SELECT * FROM `signup`;";
 $result= mysqli_query($con, $query);
 //echo $result;
 

if (mysqli_num_rows($result) === 1) {

$row = mysqli_fetch_assoc($result);

if ($row['Email'] === $Email && $row['Password'] === $Password) {

    echo "Logged in!";

    $_SESSION['Email'] = $row['Email'];

    $_SESSION['Password'] = $row['Password'];

    header("Location: ..\Home.php");

    exit();

}else{

    header("Location: ..\df.php?error=Incorect Email or password");

    exit();

}

}
}
