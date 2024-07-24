<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scoreMaking</title>
</head>
<body>
   <center>
   <h1>score making practice</h1><hr>
   <fieldset>
         <form       action="#"                  method="post">
          <h2>pleace input your score:</h2> <br>
          <input type="number" name ="score"> <br><br>
          <button type="submit">submmit</button>
          <button type="reset">reset</button>
       </form>
   </fieldset>
   </center>


  <div style="background-color: cornflowerblue; ">
  <div style="font-weight:bolder; background-color: cornflowerblue; color: black;margin-left: 100px; padding: 10px;">
        <?php
            $marks = $_POST["score"];
            if ($marks>=80 && $marks<=100){
                echo "your result is = <h1 style='color: red';>A+</h1>";
            }
            elseif($marks>=70 && $marks<=79){
                echo "your result is = A";
            }
            elseif($marks>=60 && $marks<=69){
                echo "your result is = A-";
            }
            elseif($marks>=50 && $marks<=59){
                echo "your result is = B";
            }
            elseif($marks>=40 && $marks<=49){
                echo "your result is = C";
            }
            elseif($marks>=33 && $marks<=39){
                echo "your result is = D";
            }
            elseif($marks>=00 && $marks<=32){
                echo "your result is = Fail";
            }
            elseif($marks>=101){
                echo "This is unvalid Number";
            }
            else{
                echo " এই মাথা খারাপ নাকি , উল্টা পাল্টা স্কোর দাও কেন?";
            }
        ?>
   </div>
  </div>
</body>
</html>