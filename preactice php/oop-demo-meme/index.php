<?php

require_once("student_class.php");

if(isset($_POST["btnSubmit"])){
	
	$id=$_POST["txtId"];
	$name=$_POST["txtName"];
	$course=$_POST["txtCourse"];
	$phone=$_POST["txtPhone"];	
	
		
   
		$student=new Student($id,$name,$course,$phone); 	
		$student->save();
	
       
  
    
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>OOP- orianted form</title>
</head>

<body style=background-color:#BBB3B2;>

    <fieldset>
        <legend style="text-align: center; background-color: red;">PHP OOP form practice</legend>
            <form action="#" method="post">
            
                        <div style= "text-align: center ";>
                            ID:<br/>
                            <input type="number" name="txtId" /><br/>
                            Name<br/>
                            <input type="text" name="txtName" /><br/>
                            Course<br/>
                            <input type="text" name="txtCourse" /><br/>
                            Phone<br/>
                            <input type="number" name="txtPhone" /><br/><br/>
                            <input type="submit" name="btnSubmit" value="Submit" />
                        </div>
           
           </form>
        
    </fieldset>


    <?php
    Student::display_students();
    ?>

</body>
</html>