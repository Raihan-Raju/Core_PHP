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
</head>
<body>
   

      <div style= "text-align: center ; background-color: rgb(7, 126, 244);">
         <h1 style="color:white";>Welcome  Welcome<br> School of Raihan <br> pleace Input Your Data</h1>
         <img src="F-10132 (1).jpg" alt="Raihan" style="width:100px;height:100px;">
      </div>

 <h3 style= "text-align: center ";>PHP-- OOP oriented form</h3> <hr>
          <form action="#" method="post">
            
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