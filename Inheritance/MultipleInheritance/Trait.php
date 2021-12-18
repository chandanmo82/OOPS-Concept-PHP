<?php
Trait Hello {
	public function hello() {
		echo "Hello\n";
	}
}
Trait World {
	public function world() {
		echo "World\n";
	}
}
class MyClass {
	use Hello, World;
}
$obj = new MyClass();
$obj -> hello();
$obj -> world();
?>