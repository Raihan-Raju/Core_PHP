<?php
class Student{
   private $id;
   private $name;
   private $coure;
   

   private static $file_path="data2.text";

   function __construct($_id,$_name,$_coure){
         $this->id=$_id;
         $this->name=$_name;
         $this->coure=$_coure;
        

   }

        public function csv(){
            return $this->id.",".$this->name.",". $this->coure.PHP_EOL;
        }


            public function save(){
                $students=file(self::$file_path);

                file_put_contents(self::$file_path,$this->csv(),FILE_APPEND);
            }


   public static function display_students(){
      $students=file(self::$file_path);

      echo "<b> ID |   Name     |    COURSE        </b> <br/>";
      foreach ($students as $student1) {
        list($id,$name,$coure)=explode(",",trim($student1));
        echo "$id | $name  | $coure  <br/>";
      }
   }

}


?>