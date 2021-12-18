<?php
class Books{
    var $price;
    var $number;
    var $name;
    public function setPrice($temp){
        $this->price = $temp;
    }
    public function getPrice(){
        echo $this->price . "\n";
    }
    public function setSerialNumber($temp){
        $this->number = $temp;
    }
    public function getSerialNumber(){
        echo $this->number . "\n";
    }
    public function setName($temp){
        $this->name = $temp;
    }
    public function getName(){
        echo $this->name . "\n";
    }

}
$obj1 = new Books();
$obj1->setPrice("200");
$obj1->setSerialNumber("1");
$obj1->setName("Math");
$obj2 = new Books();
$obj2->setPrice("400");
$obj2->setSerialNumber("2");
$obj2->setName("Physics");
$obj1->getSerialNumber();
$obj1->getName();
$obj1->getPrice();
$obj2->getSerialNumber();
$obj2->getName();
$obj2->getPrice();
?>