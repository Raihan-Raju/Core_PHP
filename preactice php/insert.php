<?php
$connectDB = mysqli_connect('localhost','root','','company4');

if(isset($_POST['btn'])){ 
    $id      = $_POST['id'];
    $name    = $_POST['name'];
    $email   = $_POST['email'];

    $sql  = "INSERT INTO product2(id,name,email) 
            VALUES ($id,'$name','$email')";

    if(mysqli_query($connectDB,$sql) == TRUE){ 
        echo "Data Inserted Successfully";
        header("location:insert.php");
    }
    else{
        echo "Data is not Inserted Successfully";
    }
 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container"> 
        <div class="row"> 
            <div class="col-md-3"></div>
                <form action="#" method="POST"> 
                        
                    <div class="col-md-6 pd-2 mt-2 border border-2">
                    id <br>
                    <input type="text" name="id"><br><br>
                    Name <br> 
                    <input type="text" name="name"><br><br>
                    Email <br>
                    <input type="text" name="email"><br><br>
                    <input type="submit" name="btn" value="submit" class="btn btn-success">
                    </div>

                </form>


            <div class="col-md-3"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>