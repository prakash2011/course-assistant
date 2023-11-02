<!doctype html>
<html lang="en ">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> welcome to course assistant- code </title>
</head>

<body>

    <?php include 'partials/_header.php';?>
    <?php include '.\database.php';?>
    <?php
   
    $id=$_GET['thredid'];
   
    $result=mysqli_query($conn,"SELECT * FROM thredlist WHERE thred_id=$id");
          while($row =mysqli_fetch_assoc($result)){
           $title=$row['thred_title'];
           $desc=$row['thred_desc'];
          }
          ?>
          
          
         
    <div class="container my-4">
    <div class="jumbotron">
  <h1 class="display-4"> <?php  echo $title;?> foram</h1>
    <p class="lead"><?php  echo $desc;?></p>
    <hr class="my-4">
    <p>This is a peer to peer forum.No Spam / Advertising / Self-promote in the forums. ...
        Do not post copyright-infringing material. ...
        Do not post “offensive” posts, links or images. ...
        Do not cross post questions. ...
        Do not PM users asking for help. ... </p>
    <p class="lead">
        <p> posted by course assitant:</p>
    </p>
    
    </div>
    </div>

    
    <div class="container">
        <h1>Discussion</h1>
        <div>
        
        <!-- <?php
    $id=$_GET['catid'];
    $result=mysqli_query($conn,"SELECT * FROM thredlist WHERE thred_cat_id=$id");
          while($row =mysqli_fetch_assoc($result)){
          //echo $row['category_id'];
           //echo $row['category_name'];
           $id=$row['thred_id'];
           $title=$row['thred_title'];
           $desc=$row['thred_desc'];
           
           
           echo' <div class="media">
            <img class="mr-3" src="img/ph-2.jpg" width="34px" alt="Generic placeholder image">
            <div class="media-body">
              <h5 class="mt-0"><a href="thred.php?thredid='.$id.'">'. $title.'</a></h5>
              '.$desc.'
            </div>
          </div>
        </div>';
        
      }
       ?> -->



       

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</body>

</html>