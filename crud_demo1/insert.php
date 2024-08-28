<?php
require_once("db.php");

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $con->query("INSERT INTO student(name, phone, email)VALUES('$name','$phone','$email')");

?>;

<script>
    window.location.assign("show.php");
</script>

<?php
}
?>;



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data_insert</title>
</head>
<body style=" background-color: darkgray;">
<h1 style=" text-align: center;"> CRUD oparetion for practice</h1> <hr>
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post" class="form-control">
                    Name: <input type="text" name="name" class="form-control">
                    phone: <input type="text" name="phone" class="form-control">
                    email: <input type="text" name="email" class="form-control"><br>

                    <input type="submit" value="submit" name="submit" class="btn btn-primary p-2">

                </form>
            </div>
        </div>
     </div>
</body>
</html>