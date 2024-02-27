<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result-score by php</title>
</head>
<body>
    <h2 style="background-color:black;color:white ;text-align:center" >Make result score by php</h2>

   <form action="" method="GET" name="fname">

    <label for="">pleace Enter your Score:</label>
    <input type="number" id="score" name = "fname">
    <button type="submit">submit</button>

   </form>

   <?php
    if($_SERVER['REQUEST_METHOD']=== 'GET'){
        $score = isset($_POST['$_score']) ? (int)$_POST['score'] :0;
        switch(true){
            case $score >=80 && $score <=100:
                echo "your result is: A+";
                break;
        }
    }
   ?>
</body>
</html>
