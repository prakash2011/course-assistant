<!doctype html>
<html lang="en ">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <title> corse assistant- code </title>
</head>

<body>

    <?php include 'partials/_header.php';?>
    <?php include '.\database.php';?>
    
    

   
    <!-- category content start here -->
    <div class="container  my-4">
        <h2 class="text-center ">course assistant- browse categories</h2>
        <div class="row my-3  md-3">
            <!-- fetch the all the categories -->
            <!--use  a for loop  to iterate through categories-->
            <?php
             //<a href="thredlist.php?catid='. $id .'">
             //thredlist.php?catid='.$id .'
             $result=mysqli_query($conn,("SELECT * FROM categories"));
              while($row=mysqli_fetch_assoc($result)){
                    $id=$row['category_id'];
                    $cat=$row['category_name'];
                    $desc=$row['category_description'];
                   
             echo  '<div class="col d-flex justify-content-center ">
           <div class="card  " style="width: 18rem;">
             <img class="card-img-top" src="https://source.unsplash.com/500x400/?'. $cat .',coding">
             <div class="card-body ">
               <h5 class="card-title"><a href="thredlist.php?catid='. $id.'">'. $cat .'</a></h5>

               <p class="card-text-center">'. substr($desc,0,90).'</p>
                 <a href="thredlist.php?catid='.$id .'" class="btn btn-primary">view Threads</a>
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
            