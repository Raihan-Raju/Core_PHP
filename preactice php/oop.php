<?php
class Student{
    public $name;

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}

$Raihan = new Student();
$Raihan->set_name("Raihan");
echo $Raihan->get_name();
?>