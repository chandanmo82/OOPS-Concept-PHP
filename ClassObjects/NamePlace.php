<?php
class Place {
    public function printItem($string) {
        echo ' Hi : ' . $string."\n"; 
    } 
    public function printPHP() {
        echo 'I am from Odisha' ."\n";
    }
}
class Name  {
    public function printItem($string) {
        echo ' Hi : ' . $string . "\n";
    }
    public function printPHP() {
        echo "I am from Goa \n" ;
    }
}
$obj1 = new Place();
$obj2 = new Name();
$obj1->printItem('Chandan');
$obj1->printPHP();       
$obj2->printItem('Ankit'); 
$obj2->printPHP();       
?>