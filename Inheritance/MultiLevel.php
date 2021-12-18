<?php

class Jewellery {

    public function totalCost() {

        echo  " total jewellery cost: 600000\n";

    }  

}
class Necklace extends Jewellery {

    public function necklaceCost() {

        echo  " total necklace cost: 200000\n";

    }

}
class Pendant extends Necklace {

    public function pendantCost() {

        echo  " total pendant cost: 400000\n";

    }

}
$pendant = new Pendant();
$pendant->necklaceCost();
$pendant->pendantCost();
$necklace = new Necklace();
$necklace->totalCost();
?>
