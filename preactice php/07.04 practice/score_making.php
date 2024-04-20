<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show marks</title>
</head>
<body>
    <h2>show the result of your exam:</h2>
     <form action="" method="post">
         <fieldset>
            <h3>pleace input your score:</h3>
            <input type="number"name="score">
            <input type="submit"> 
         </fieldset>
     </form>


     <?php
       
       $marks = $_POST["score"];

       if($marks>=80 && $marks<=100){
          echo "<h3>your result is:</h3>  <h1>A+</h1>";
       }
       else if($marks>=70 && $marks<=79){
        echo "<h3>your result is:</h3>  <h1>A</h1>";
     }
       else if($marks>=60 && $marks<=69){
        echo "<h3>your result is:</h3>  <h1>A-</h1>";
     }
       else if($marks>=50 && $marks<=59){
        echo "<h3>your result is:</h3>  <h1>B</h1>";
     }
       else if($marks>=40 && $marks<=49){
        echo "<h3>your result is:</h3>  <h1>C</h1>";
     }
       else if($marks>=33 && $marks<=39){
        echo "<h3>your result is:</h3>  <h1>D</h1>";
     }
       else {
        echo "<h3>your result is:</h3>  <h1>Fail</h1>";
     }
     
     ?>
</body>
</html>