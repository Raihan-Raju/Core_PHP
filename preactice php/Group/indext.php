<?php 

include "class_parent.php";
include "class_child.php";
include "another_class.php";

use Molla\First;
use Rakib\First as Another;
use Mamun\second;


$disply = new Another();
$disply->disply();

echo "<br>";

$tangila = new Another();
$tangila->disply();

echo "<br>";

$show_info = new Second();
$show_info->show();

?>