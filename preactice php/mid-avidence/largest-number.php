<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>largest number</title>
</head>
<body>
    <form method = "post"> 
        <input type="text" placehoder="number" name = "N1"><br><br>
        <input type="text" name = "N2"><br><br>
        <input type="text" name = "N3"><br><br>
        <input type="submit" name = "submit"> <hr>
    </form>


    <?php   
    if(isset($_POST["submit"])){ 
        $num1 = $_POST["N1"];
        $num2 = $_POST["N2"];
        $num3 = $_POST["N3"];

        if($num1>$num2 && $num1>$num3){
            echo ("this is a largest number =$num1");
        }
        elseif($num2>$num1 && $num2>$num3){
            echo("this is a largest number =$num2");
        }
        else
        {
            echo("this is a largest number =$num3");
        }
    }
    ?>
</body>
</html>