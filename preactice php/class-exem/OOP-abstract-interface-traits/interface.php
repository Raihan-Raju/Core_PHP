<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface OOp</title>
</head>
<body style="background-color: cornflowerblue;">
    
   <h1 style="background-color: black; color: white; text-align: center;">Interface OOp</h1> <hr>

        <?php 
            interface User{ 
                public function getName();
                public function info();
                public function desplay();
                public function desplay2();


            }

            class wdpf implements User{ 
                public function getName(){ 
                    echo "(1st) interface comment hello world <br>";
                }
                public function info(){ 
                    echo "(2nd) interface comment hello world <br>";
                }
                public function desplay(){ 
                    echo "(3rd) interface comment hello world <br>";
                }
            }

            $add = new wdpf;
            $add->getName();
            $add->info();
            $add->desplay();
        ?>

</body>
</html>