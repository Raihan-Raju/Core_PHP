<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factoril-number</title>
</head>
<body>

  <h1>pleace enter your number:</h1> <br><br>

    <form method = "post">  
            <input type="number" name = "N1">
            <input type="submit" name = "submit">
    </form>



<?php
if(isset($_POST["submit"])){ 
    $num1 = $_POST["N1"];
    
function factorial($num1) {
    if ($num1 == 0 || $num1 == 1) {
        echo "Factorial of $num1 is:1";
    } else {
        $current=1;
        for ($i=2; $i <= $num1; $i++) { 
            $next=$i;
            $current=$current*$next;
        }
        echo "Factorial of $num1 is: $current";
    }
}


$result = factorial($num1);
// echo "Factorial of $num1 is: '\t''\t' $result";
}
?>

</body>
</html>