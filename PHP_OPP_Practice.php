<?php 
/**
*h1 Write a PHP class 'Rectangle' that has properties for length and width
*h1 mplement methods to calculate the rectangle's area and perimeter.
 */
// class rectangle{
//     private $length;
//     private $width;
//     function __set($prob,$value ){//?error handling
//         echo "The property ".$prob." Is Not Accessible Or Not Found<br>";
//         echo "And you cannot assign a value to it $value<br>";
//         exit();
//     }
//     public function __construct($l,$w){
//         $this->length=$l;
//         $this->width=$w;
//     }
//     public function calc_area(){
//         return $this->length*$this->width;
//     }
//     public function calc_peri(){
//         return 2*($this->length+$this->width);
//     }
// }
// $rect1=new rectangle(10,20);
// echo $rect1->calc_area();
// echo "<br>";
// echo $rect1->calc_peri();
/**
 *h1 Write a PHP class called 'Circle' that has a radius property. 
 *h1 Implement methods to calculate the circle's area and circumference. 
 */
// class rectangle{
//     private $radius ;
//     // private const pi=3.14;
//     function __set($prob,$value ){//?error handling
//         echo "The property ".$prob." Is Not Accessible Or Not Found<br>";
//         echo "And you cannot assign a value to it $value<br>";
//         exit();
//     }
//     public function __construct($r){
//         $this->radius=$r;
//     }
//     public function calc_area():float{
//         return $this->radius**2*pi();
//     }
//     public function calc_circum():float{
//         return 2*(pi() * $this->radius);
//     }
// }
// $rect1=new rectangle(7);
// echo $rect1->calc_area();
// echo "<br>";
// echo $rect1->calc_circum();
/**
 * h1 Write a PHP class called 'Shape' with an abstract method 'calculateArea()'. 
 * h1 Create two subclasses, 'Triangle' and 'Rectangle', that implement the 'calculateArea()' method.
 */
// abstract class Shape{

//     abstract protected function CalculateArea();
// }
// class triangle extends Shape{
//     private $base;
//     private $height;
//     public function __construct($base ,$height){
//         $this->base=$base;
//         $this->height=$height;
//     }
//     public function CalculateArea(){
//         return 0.5*$this->base*$this->height;
//     }
// }
// class rectangle extends Shape{
//     private $length;
//     private $width;
//     public function __construct($l,$w){
//         $this->length=$l;
//         $this->width=$w;
//     }
//     public  function CalculateArea(){
//         return $this->length*$this->width;
//     }
// }
// $triangle_object=new triangle(10,20);
// echo $triangle_object->CalculateArea();
// echo "<br>";
// $rectangle_object=new rectangle(10,20);
// echo $rectangle_object->CalculateArea();
/**
 *h1 Write a PHP interface called 'Resizable' with a method 'resize()'.
 *h1 Implement the 'Resizable' interface in a class called 'Square' and add functionality to resize the square.
 */
// interface Resizable{
//     public function resize($percentage);
// }
// class Square implements Resizable{
//     private $side;
//     public function __construct($side){
//         $this->side=$side;
//     }
//     public function resize($p){
//         $this->side=$this->side * ($p/100);
//     }
//     public function getArea(){
//         return $this->side**2;
//     }
//     public function getside(){
//         return $this->side;
//     }
// }
// $object = new Square(10);
// echo $object->getside();
// echo "<br>";
// echo $object->resize(60);
// echo "<br>";
// echo $object->getArea();
// echo "<br>";
/**
 * h1  Write a PHP class called 'Vehicle' with properties like 'brand', 'model', and 'year'.
 * h1 Implement a method to display the vehicle details.
 */
// class   Vechicle {
//     private $brand;
//     private $model;
//     private $year;
//     function __construct($b,$m,$y){
//         $this->brand=$b;
//         $this->model=$m;
//         $this->year=$y;
//     }
//     function display_info(){
//         echo $this->brand;
//         echo "<br>";
//         echo $this->model;
//         echo "<br>";
//         echo $this->year;
//     }
// }
// $obj=new Vechicle('KIA',"B",'2022');
// $obj->display_info();
/**
 * h1 Write a PHP a class hierarchy for a library system, including classes like 'LibraryItem', 'Book', 'DVD', etc. 
 * h1 Implement appropriate properties and methods for each class.
 * h1
 */
// class LibraryItem{
//     protected $title;
//     protected $author;
//     protected $year;
//     public function __construct($title,$author,$year){
//         $this->title=$title;
//         $this->author=$author;
//         $this->year=$year;
//     }
    

// 	/**
// 	public function getTitle() {
// 		return $this->title;
// 	}
	
// 	/**
// 	public function getAuthor() {
// 		return $this->author;
// 	}
	
// 	/**
// 	public function getYear() {
// 		return $this->year;
// 	}
// }
// class Book extends LibraryItem{
//     protected $genre;
//     public function __construct($title,$author ,$year,$genre){
//         parent::__construct($title,$author,$year);
//         $this->genre =$genre;
//     }

// 	public function getGenre() {
// 		return $this->genre;
// 	}
//     public function displaydetails(){
//         echo $this->title;
//         echo $this->author;
//         echo $this->year;
//         echo $this->genre;
//     }
// }
// class DVD extends LibraryItem{
//     protected $duration;
//     public function __construct($title,$author ,$year,$duration ){
//         parent::__construct($title,$author,$year);
//         $this->duration=$duration;
//     }
    

// 	/**
// 	public function getDuration() {
// 		return $this->duration;
// 	}
//     public function displayinfo(){
//         echo $this->title;
//         echo $this->author;
//         echo $this->year;
//         echo $this->duration;
//     }
// }
/**
 * h1 Write a PHP class called 'Student' with properties like 'name', 'age', and 'grade'. 
 * h1 Implement a method to display student information.
 */
