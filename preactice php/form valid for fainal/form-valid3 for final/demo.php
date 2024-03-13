<?php
    session_start();
    if(!isset($_SESSION["sname"])){
        header("location:login.php");

    }

    require_once("object2.php");
    

    if (isset($_POST["btnSubmit"])){
        $id=$_POST["txtId"];
        $name=$_POST["txtName"];
        $course=$_POST["txtCourse"];
        $phone=$_POST["txtPhone"];

             $student1=new Student($id,$name,$course,$phone);
             $student1->save();

        
    }
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo-php</title>
    <style>
                *{
            margin: 0;
            padding: 0%;
            box-sizing: border-box;
        }

        img{
            display: block;
        }
        nav{
            width: 100%;
            height: 40px;
            background-color: rgb(0, 126, 243);
            align-items: center;
            display: flex;
        }
        .logo{
            width: 15%;
            margin-left: 100px;
            
        }
        .logo img{
            width: 100px;
        }
        .fastmanu{
            width: 60%;
            display: flex;
            margin-left: 100px;
        }
        .fastmanu a{
            padding:0px 50px;
            text-decoration: none;
            color: rgb(255, 255, 255);
            border: 2px solid red;
            border-radius: 15px;
            
        }
        .fastmanu a:hover{
            background-color: red;
            color: black;  
        }
        .sarchbar{
            width: 25%;
        }
    </style>
</head>
<body style="background-color: lightslategray;">
   
    <nav>
        <div class="logo">
            <div> 
                <!-- <img src="logo-dark.png" alt=""> -->
                <img style="width: 40px;" src="Raihan-official-img.jpg" alt=""> 
            </div>
        </div>

        <div class="fastmanu">
            <a href="Main-file.html">About Us</a>
            <a href="Feather.html">Features</a>
            <a href="table.html">Contact Us</a>
           
        </div>


        <div class="sarchbar">
            <input type="text">
            <button>sarch</button>
        </div>
    </nav>

    <marquee behavior="" direction="" style="background-color: rgb(10, 10, 10); color: red; font-size: 30px;"><h3 style= "text-align: center ";>PHP-- OOP oriented form  -------//-------Here you can submmit your parsonal data and data storage in data text and show on this window ,, then if you logout from here sothat all data is to be session_out--///-- Ok, lets go to start--</h3></marquee> <hr>
          <form action="#" method="post">

          <!-- <div style= "text-align: center ; margin-left:48%;"><img style="width: 30px;" src="Raihan-official-img.jpg" alt=""> </div> -->
            
                        <div style= "text-align: center ;background-color:#BBB3B2";>
                            ID:<br/>
                            <input type="number" name="txtId" /><br/>
                            Name<br/>
                            <input type="text" name="txtName" /><br/>
                            Course<br/>
                            <input type="text" name="txtCourse" /><br/>
                            Phone<br/>
                            <input type="number" name="txtPhone" /><br/><br/>
                            <input type="submit" name="btnSubmit" value="Submit" />
                        <button> <a href="logout.php">logout<a></button>

                        </div>
           
           </form>


      <?php
        Student::display_students();
      ?>  

<!-- 
        <footer style= "text-align: center ";>
        <a href="login.php"><button name="sname" value="logout">Logout
            </button></a>
        </footer> -->

</body>
</html>