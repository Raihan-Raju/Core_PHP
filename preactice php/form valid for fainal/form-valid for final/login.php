      <?php session_start();
        
            if(isset($_POST["btnLogin"])){
              
                  $username=$_POST["txtUsername"];
                  $password=$_POST["txtPassword"];
                  
                if ($username=="admin" && $password=="123"){ 
                  $_SESSION["sname"]=$username;
                  header("location:demo.php");
                 } 
                else{ 
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

    <body style="background-color: lightslategrey; margin: 0; padding: 0%; box-sizing: border-box;">
          <?php
            echo isset($msg)?$msg:"";
          ?>


      <div style= "text-align: center ; background-color: rgb(7, 126, 244);">
         <h1 style="color:white";>Start a Data submiting Practice <br> School of Raihan <br> pleace Login Here--</h1>

         

      </div>


          <div style=" width:500px;margin:10px  auto ";>
              <form action="#" method="post">
                    <div>
                      Username<br/>
                      <input type="text" name="txtUsername" />
                    </div>
                    <div>
                      Password<br/>
                      <input type="password" name="txtPassword" />
                    </div>
                    <div>
                      <input  type="submit" value="Log In" name="btnLogin" />
                    </div>
              </form>

          </div>

    </body>
</html>