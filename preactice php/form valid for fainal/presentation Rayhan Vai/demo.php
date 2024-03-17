<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>authentication</title>
</head>
<body>
    <center  style=" background-color:darkgrey;"> 
        <form action="#" method="post"> 
            <fieldset>
                Id : <input type="number" name="txtid"><br><br>
                Name : <input type="text" name="txtname"><br><br>
                Emial : <input type="email" name="email"><br><br>
                Phone : <input type="number" name="phn"><br><br>
                File-upload :  <button><a href="file_upload.php">Upload</a></button> <br><br>

                <input type="submit" name="btn" value="submit">
                <button><a href="logout.php">logout</a></button>
                
            </fieldset>
        </form>
    </center>
    
</body>
</html>

<?php

session_start();
if(!isset($_SESSION['fname'])){ 
    header("location:login.php");
}
   

?>