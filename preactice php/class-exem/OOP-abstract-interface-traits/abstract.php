<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abstract OOP</title>
</head>
<body style="background-color: darkolivegreen;">
    
<h1 style="background-color: black; color: white; text-align: center;">Abstract OOP</h1> <hr>


        <?php 
            abstract class User{ 
                abstract public function getName();
                abstract public function info();
                public function desplay(){ 
                 echo "third";
                }

            }

            class wdpf extends  User{ 
                public function getName(){ 
                    echo "(1st) abstract comment hello world <br>";
                }
                public function info(){ 
                    echo "(2nd)second abstract comment hello world <br>";
                }
                public function desplay(){ 
                    echo "(3rd)third abstract comment hello world ";
                }
            }

            $add = new wdpf;
            $add->getName() ;
            $add->info();
            $add->desplay();
        ?>
     
</body>
</html>