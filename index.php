
<?php
$insert=false;
//IF NAME IS INSERT THAN THIS BELOW PROCESS STSRT
if(isset($_POST['Email']))
{
    //BUILD THE SERVER CONNECTION
$Server="localhost";

$username="root";
$password="";
//CHECK THE SERVER CONNECTION
$con= mysqli_connect($server,$username,$password);
if(!$con){
    die("connection to this database  failed due to ". mysqli_connect_error());
}

$insert=false;
//FOR THE VALUES ENTER 
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$PhoneNumber=$_POST['PhoneNumber'];
$ConfirmPassword=$_POST['ConfirmPassword'];

$sql="INSERT INTO `Sep_login`.`signup`(`Email`, `Password`, `PhoneNumber`, `ConfirmPassword`,`Date`) VALUES ('$Email', '$Password', '$PhoneNumber', '$ConfirmPassword', CURRENT_TIMESTAMP);";
//echo $sql;
//IF SQL QUERY OK THAN FLAg is true
if($con->query($sql)== true){
   
    $insert =true;
  }
 else{
   // echo "ERROR: $sql <br> $con->error"; 
}

//its mandatory to close the connection.
$con->close();
}
?>

<!doctype html>
<html lang="en ">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
    <title> welcome to course assistant- code </title>
</head>

<body>

    <?php include 'partials/_header.php';?>
   
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">courses</a></li>
    <li class="breadcrumb-item"><a href="#">Discussion forum</a></li>
    <li class="breadcrumb-item active" aria-current="page">Instructor page</li>
  </ol>
  <?php
  
  
  
    if($insert== true){
      echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>suffesfully submitted</strong> You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>';
    }

  
  ?>
</div>
</nav>

<!--slider start here-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src=".\img12.jpg" alt="First slide"width="1000" height="400" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=".\img14.jpg" alt="Second slide" width="1000" height="400">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=".\img18.jpg" alt="Third slide" width="1000" height="400">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <div class="jumbotron">
  <h1 class="display-4">Course assistant</h1>
  <p class="lead"> Website allows learners to quickly and more easily complete their courses, resulting in improved performance and greater productivity. Learners appreciate that they can Enroll in  course at their convenience.
</p>
  <hr class="my-4">
  <p>Engaging and interactive content, incorporating features like Lerner suggested courses, progress, and discussion forums.</p>
  <p class="lead">
    <a class="btn btn-success btn-lg" href="partials\Home.php" role="button">Join now</a>
  </p>
</div>
</div>
            
           




        
    <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>
                </body>
                <footer class="footer">
      <div class="container">
        <span class="text-muted">copyright@ course  assistnat 2023</span>
      </div>
    </footer>

</html>