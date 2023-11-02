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
        
    <title> course Assistant </title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="..\index.php">Course Assistant</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="Home.php">Home<span class="sr-only">(current)</span></a>
   
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="About.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Home.php">Courses</a>
          
        
          <a class="dropdown-item" href=".\Request.php">Request</a>
          <a class="dropdown-item" href=".\contact.php">Contact us</a>

          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="../df.php">discussion forum</a>
      </li>
     
    </ul>
    
      
    </form>
    <div class="mx-2">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      <a class="btn btn-outline-success mx-2 my-2 my-sm-0" href="..\index.php" role="button">Log out</a>
    </div>
  </div>
  
</nav>
<?php
include '_loginmodal.php';

?>
   <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="..\partials\Home.php">courses</a></li>
    <li class="breadcrumb-item"><a href="../df.php">Discussion forum</a></li>
    <li class="breadcrumb-item " aria-current="page"><a href=".\Request.php">Request</li>
   
    
  </ol>
  
</div>
</nav>

   


   <!-- for course description -->
   <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4 my-4 ">
            <img class="rounded-circle" src="..\img14.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>HTML</h2>
            <p>"An HTML course covers the fundamentals of web development, including HTML structure, elements, tags, links, images, forms, and basic styling, providing essential skills for creating functional and visually appealing web pages"</p>
            <p><a class="btn btn-secondary" href=".\viewdetails.php" role="button">View details »</a></p>
           </div><!-- /.col-lg-4 -->

          <div class="col-lg-4 my-4">
            <img class="rounded-circle" src="..\img12.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>PHP</h2>
            <p>"A PHP course provides comprehensive training in server-side scripting, covering variables, loops, functions, databases, and dynamic web content, equipping you to create interactive and dynamic websites."</p>
            <p><a class="btn btn-secondary" href=".\viewdeatils.php" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4  my-4" >
            <img class="rounded-circle" src="..\img15.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>javascript</h2>
            <p>"A JavaScript course teaches client-side scripting for dynamic web development. Topics include variables, functions, DOM manipulation, events, and AJAX, enabling interactive and responsive web applications."</p>
            <p><a class="btn btn-secondary" href=".\viewdeatils.php" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-lg-4 my-4 ">
            <img class="rounded-circle" src="..\img20.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>java</h2>
            <p>"Learn Java programming language fundamentals, object-oriented concepts, data structures, and algorithms. Build applications, handle exceptions, and gain practical coding skills for software development. Suitable for beginners and intermediate learners."</p>
            <p><a class="btn btn-secondary" href=".\viewdeatils.php" role="button">View details »</a></p>
           

          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4 my-4">
            <img class="rounded-circle" src="..\img21.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Python</h2>
            <p>"Master Python programming: syntax, data structures, functions, and modules. Develop applications, automate tasks, and explore data science libraries. Ideal for beginners and those transitioning to Python for diverse projects."</p>
            <p><a class="btn btn-secondary" href=".\viewdeatils.php" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4  my-4" >
            <img class="rounded-circle" src="..\img22.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>c# </h2>
            <p>"Comprehensive C# course covers syntax, object-oriented programming, .NET framework, and GUI applications. Learn to build robust software and games. "</p>
            <p><a class="btn btn-secondary" href=".\viewdeatils.php" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        
        <div class="jumbotron">
       

  <h1 class="display-4">Are you instructor?</h1>
  <p class="lead">Website allows Instructor  to quickly and more easily  add their courses.
</p>
  <hr class="my-4">
  <p>Enter your course Detail using below Add a course Button </p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href=".\listcourse.php" role="button">Add a course</a>
  </p>
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
      <div class="container my-2 ">
        <span class="text-muted">copyright@ course  assistnat 2023</span>
      </div>
    </footer>

</html>