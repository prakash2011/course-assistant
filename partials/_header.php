<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Course Assistant</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="">Home<span class="sr-only">(current)</span></a>
   
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Courses</a>
          
        
          <a class="dropdown-item" href="#">Suggestions</a>
          <a class="dropdown-item" href="#">Contact us</a>

          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="/contact.php">Discussion forum</a>
      </li>
     
    </ul>
    
      
    </form>
    <div class="mx-2">
    <button class="btn btn-outline-success ml-2 "data-toggle="modal" data-target="#loginmodal">Login</button>
    <button class="btn btn-outline-success mx-2"data-toggle="modal" data-target="#signupmodal">Sign up</button><br>

    </div>
  </div>
  

</nav>
<?php
include '_loginmodal.php';
include '_signupmodal.php';
?>