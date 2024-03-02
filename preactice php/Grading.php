<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading-system</title>
</head>
<body>
   <form action="" method="post">
    <h2>pleace enter your score</h2>
    <input type="number" name = "score">
    <button type="submit" >Submit</button>
    <button type="reset">reset</button>
   </form> 

   <?php
    $marks = $_POST["score"];

    if($marks>=80 && $marks<=100){
        echo "Your result is = A+";
    }
    elseif($marks>=70 && $marks<=79){
        echo "Your result is = A";
    }
    elseif($marks>=60 && $marks<=69){
        echo "Your result is = A-";
    }
    elseif($marks>=50 && $marks<=59){
        echo "Your result is = B";
    }
    elseif($marks>=40 && $marks<=49){
        echo "Your result is = C";
    }
    elseif($marks>=33 && $marks<=39){
        echo "Your result is = D";
    }
    elseif($marks>=1 && $marks<=32){
        echo "Your result is = Fail";
    }
    else{
       
        echo " এই মাথা খারাপ নাকি , উল্টা পাল্টা স্কোর দাও কেন?";
    }
   ?>
</body>
</html>