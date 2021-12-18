<?php
    // parent class
    class Vehicle {
        // public property name
        public $name;
        
        // public function start
        public function start() {
            echo $this->name. " - Engine start...\n";
        }
        
        // public function stop
        public function stop() {
            echo $this->name. " - Engine stop...\n";
        }
    }
    
    // child class
    class Car extends Vehicle {
        
        public function drive() {
            echo "I am " . $this->name . "\n";
            echo "Lets go on a drive...\n";
        }
        
    }
    
    // child class
    class Motorcycle extends Vehicle {
        
        public function bikeDrive(){
            echo "I am " .$this->name . "\n";
            echo "Lets go for a Nightout with bike...\n";
        }
        
    }
    //creating childclass(Car) Object
    $car = new Car();
    $car->name = "Mercedes benz";
    
    // calling parent class method
    $car->start();
    // calling child class method
    $car->drive();
    $car->stop();

    //creating childclass(Motorcycle) Object
    $motorcycle = new Motorcycle();
    $motorcycle->name ="BMW GS1200";
    $motorcycle->start();
    $motorcycle->bikeDrive();
    $motorcycle->stop();
?>