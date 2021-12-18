<?php
class Person{
    private $name;
    private $gender;
    private $email;
    public function __construct($name,$gender, $email) {
        $this->name = $name;
        $this->gender = $gender;
        $this->email = $email;
        echo "My Details are :\n";
    }
    public function showDetails(){
        echo "I am ".$this->name." and gender is ".$this->gender." and email id is :".$this->email."\n";
    }
}
$chandan = new Person('Chandan','Male','chandan@gmail.com');
$chandan->showDetails();