<?php
require_once("db.php");

$id = $_GET['id'];
$edit = $con->query("SELECT * FROM student WHERE id=$id")->fetch_assoc();

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $con->query("UPDATE `student` SET `name`='$name',`phone`='$phone',`email`='$email' WHERE id=$id");
    ?>
    <script>
      window.location.assign("show.php");
    </script>
    <?php 
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit document</title>
</head>
<body style=" background-color: darkgray;">
<h1 style=" text-align: center;"> CRUD oparetion for practice</h1> <hr>



<div class="container">
    <div class="row">
        <div class="col-md-12">
          <center>
          <form action="#" method="post" class="from-control">
                <p>name:</p>
                <input type="text"name="name" value="<?php echo $edit['name']?>" class="from-control"> <br>
                <p>phone:</p>
                <input type="text"name="phone" value="<?php echo $edit['phone']?>" class="from-control"> <br>
                <p>email:</p>
                <input type="text"name="email" value="<?php echo $edit['email']?>" class="from-control"> <br>

                <input type="submit" value="submit" class="btn btn-primary p-2 mt-3">
            </form>
          </center>
        </div>
    </div>
</div>
    


</body>
</html>