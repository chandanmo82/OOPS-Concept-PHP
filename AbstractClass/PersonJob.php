
<?php
abstract class Person {
	public $name;
	public function __construct($name) {
		$this -> name = $name;
	}
	abstract public function job() ;
}
class Teacher extends Person {
	public function job()  {
		return "My name is " . $this -> name ." and I am a teacher in HighSchool\n";
	}
}
class Doctor extends Person {
	public function job() {
		return "My name is  " . $this -> name ." and I am a Doctor in AIIMS\n";
	}
}
class Soldier extends Person {
	public function job()  {
		return "My Name is " . $this->name." and My job is to protect my country\n";
	}
}
$teacher = new Teacher('Ankit');
echo $teacher -> job();

$doctor = new Doctor('Mr. Agrawal');
echo $doctor -> job();

$soldier = new Soldier('Shreshah');
echo $soldier -> job();
?>