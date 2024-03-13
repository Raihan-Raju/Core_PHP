  <?php session_start();
    
    if(isset($_POST["btnLogin"])){
      
      $username=$_POST["txtUsername"];
      $password=$_POST["txtPassword"];
      
      if ($username=="admin" && $password=="123"){ 
        $_SESSION["sname"]=$username;
        header("location:demo.php");
    } else{ 
      $msg="Username or Password is incorrect!";
    }
    }

  ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login option</title>
  </head>
  

  <body style="background-color: lightslategray;">
      <?php
        echo isset($msg)?$msg:"";
      ?>

<div>
  <h2 style= "text-align: center ;">"Hello" Raihans PHP practice <br> Pleace Login</h2>
</div> <hr>

       <div style=" width:500px;margin:10px  auto">
        <form action="#" method="post">
             <fieldset style="text-align: center; background-color: darkgrey;">
                  <div>
                        Username<br/>
                        <input type="text" name="txtUsername" />
                    </div>
                    <div>
                        Password<br/>
                        <input type="password" name="txtPassword" />
                    </div> <br>
                    <div>
                      <input type="submit" value="Log In" name="btnLogin" />
                    </div>
             </fieldset>
          </form>
       </div>

  </body>
</html>