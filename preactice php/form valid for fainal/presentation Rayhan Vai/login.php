 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <div style="margin-left:300px;">
    <h2 >pleace login :</h2>
 </div>

    <center style=" width:500px;margin:10px  auto ; background-color:darkgrey;">
        <form action="#" method="post"> 
            <fieldset>
                <input type="text" name="user"><br><br>
                <input type="password" name="password"><br><br>
                <input type="submit" name="btn" vlaue="submit">
            </fieldset>
        </form>
    </center>
    
</body>
</html>

<?php

session_start();
if(isset($_POST['btn'])){ 
    $user_name = $_POST['user'];
    $password = $_POST['password'];

    if($user_name =="admin" && $password =="123"){ 
        $_SESSION['fname']=$user_name;
        header("location:demo.php");
    }
    else{ 
      $msg = "username or password is not corredt";
    }
}


?>

<?php
echo isset($msg)?$msg:"";

?>

