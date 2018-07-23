<php

class Person {

private $name;

private $age;

private $gender;

private $job;

function __construct($new_name, $new_age, $new_gender, $new_job) {

$this->name = $new_name;

$this->age = $new_age;

$this->gender = $new_gender;

$this->job = $new_job;

}

public function set_name($new_name) {

$this->name = $new_name;

}

public function get_name() {

return$this->name;

}

public function set_age($new_age) {

$this->age = $new_age;

}

public function get_age() {

return$this->age;

}

public function set_gender($new_gender) {

$this->gender = $new_gender;

}

public function get_gender() {

return$this->gender;

}

public function set_job($new_job) {

$this->job = $new_job;

}

public function get_job() {

return$this->job;

}

}

?>
