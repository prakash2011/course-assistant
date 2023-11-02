<!doctype html>
<html lang="en ">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> welcome to idiscuss- code </title>
</head>

<body>

    <?php include 'partials/_header.php';?>
    <?php include '.\database.php';?>
    <?php
    $id=$_GET['catid'];
    $result=mysqli_query($conn,"SELECT * FROM categories WHERE category_id=$id");
          while($row =mysqli_fetch_assoc($result)){
          //echo $row['category_id'];
           //echo $row['category_name'];
          
           $catname=$row['category_name'];
           $catdesc=$row['category_description'];
          }
           ?>

    <div class="container my-4">
    <div class="jumbotron">
  <h1 class="display-4">welcome to <?php  echo $catname;?> forum</h1>
  <p class="lead"><?php  echo $catdesc;?></p>
  <hr class="my-4">
  <p>This is a peer to peer form.No Spam / Advertising / Self-promote in the forums. ...
Do not post copyright-infringing material. ...
Do not post “offensive” posts, links or images. ...
Do not cross post questions. ...
Do not PM users asking for help. ... </p>
  <p class="lead">
    <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
    </div>
    <div class="container">
    <form action="<?php echo $_SERVER['Request_URI']?>" method="post">
    <div class="form-group">
                        <label for="exampleInputPassword1">Add a comment</label><br>
                        <input type="comment" class="form-control" id="comment" placeholder="comment" name="comment">
        </div>
        <button type=" submit" class="btn btn-primary my-2 mx-2">Post comment</button>  
        </form>
          
        </div>
    <div class="container">
        <h1>Browse questions</h1>
        <?php
    $id=$_GET['catid'];
    $result=mysqli_query($conn,"SELECT * FROM thredlist WHERE thred_cat_id=$id");
          while($row =mysqli_fetch_assoc($result)){
          //echo $row['category_id'];
           //echo $row['category_name'];
           $id=$row['thred_id'];
           $title=$row['thred_title'];
           $desc=$row['thred_desc'];
         
           echo '
           <div class="container">
           <div class="media">
            <img class="mr-3" src=".\img30.jpg" width="34px" alt="Generic placeholder image">
            <div class="media-body">
              <h5 class="mt-0 "><a href="thred.php?thredid='.$id.'">'. $title.'</></h5> '.$desc.'
            </div>

          </div>
        </div>
        </div>';
        
      }
       ?>

    

       

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

</html>