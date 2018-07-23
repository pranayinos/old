<?php
  class Rectangle {
    public $height;
    public $width;
    public function __construct($width, $height) {
      $this->width = $width;
      $this->height = $height;
     }
     public function getArea() {
      return $this->height * $this->width;
     }
   }
  class Square extends Rectangle {
    public function __construct($size) {
      $this->height = $size;
      $this->width = $size;
    }
   
    public function getArea() {
      return pow($this->height, 2);
    }
   
  }

$obj = new Square(7);
$a = $obj->getArea();
echo "$a";

?>