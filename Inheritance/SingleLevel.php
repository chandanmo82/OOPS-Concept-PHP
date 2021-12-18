<?php
class Jewellery {

    public $price = "We have a fixed price of 100000";

    function printMessage() {

        echo $this->price."\n";

    }

}
class Necklace extends Jewellery {

    function print(){

        echo "30% Discount on Necklace\n";

    }

}
$obj= new Necklace;
$obj->printMessage();
$obj->print();
?>