<?php
class Myclass{
   function __construct(){
      echo "object is initialized\n";
   }
   function __destruct(){
      echo "object is destroyed\n";
   }
}
$obj=new Myclass();
?>