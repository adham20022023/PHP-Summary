<?php 
/*
  =====================================================================================
  ================================= Revision on OOP ===============================
  =====================================================================================
*/
/**
 * * Four principles of OOP
 * * 1. Abstraction التجريد
 * * 2. Encapsulation التغليف
 * * 3. Inheritance الوراثة
 * * 4. Polymorphism تعدد الاشكال 
 */
 //h1 array of object  not used 
   // $list_of_object=(object)[
   //  "name"=>"elzero",
   //  "age"=>20
   // ];
   // echo $list_of_object->name;
   // $list_of_object->not_exists="i'm here ";
   // print_r($list_of_object);
 //h1 call back function 
   /**
    * * callback function the the function passed to another function  as an argument
    */
   //  function callback(){
   //    return "hello ";
   //  }
   //  function main($callback){
   //    return "$callback"."world";
   //  }
   //  echo main(callback());
 //h1 take object from class 
   /**
    ** any class have consists of $variables => properties and functions => methods 
    */
   //  class test{
   //    public $name;
   //    public $age;
   //    public function sayHello(){
   //       echo "Hello World";
   //    }
   //  }
   //  $object = new test();
   //  $object->name="adham";
   //  $object->age="20";
   //  print($object->name);
   //  print($object->age);
   //  echo "<hr>";
   //  $object->sayHello();
//h1 chaining methods  you can do it with static methods too
 /**
  * * chaining methods 
  * *It allows you to call multiple methods on an object in a single line of code, one after the other, by using the return value of each method to call the next one. This creates a chain of method calls.
  */
//   class message {
//    public $message;
//    public function openchat(){
//       echo "open chat <br>";
//       return $this;
//    }
//    public function send(){
//       echo $this->message.'<br>';
//       return $this;
//    }
//    public function closechat(){
//       echo "close chat <br>";
//       // print_r($this);//! return the current class
//       return $this;
//    }
//   }
//   $student=new message();
//   $student->message="task 2 complete";
//   $student->openchat()->send()->closeChat()->openChat();
//h1 Refer to the class only object can't access it 
// class user{
//    public $name;
//    public static $status="active";
//    public const bonus=50;
//    public function login(){
//       $this->name;
//       $this->register();
//       user::$status;
//       user::bonus;
//       user::logout();
//       //self => refer to current class 
//       self::$status;
//       self::bonus;
//       self::logout();

//    }
//    public function register(){

//    }
//    public static function logout(){
//       echo "logout";
//    }
// }
// $user=new user();
// print_r($user);// will print only the name of the class
// echo user::$status; //access directly with the class name 
// user::logout();
//h1 inheritance 
//  class user{//! final class  keyword can't extends other classes
//    public $name;
//    public static $status="active";
//    public function login($args){//? support override  not support overload

//    }
//    public function logout(){
//       print("logout");
//    }
// }
// class normal_user extends user{
//    public function login($arg){
//       print("login as normal user");
//    }
// }
// class admin extends user{
//    // public static $status="Not Active ";//! higher priority 
//    public function login($arg){//?not support overload 
//       print("login as admin");
//    }
// }
// $admin=new admin();
// $admin->login('test');
// echo "<br>";
// echo $admin::$status;
// echo "<br>";
// $admin->logout();
//h1 Access modifiers 
// access modifiers => visibility members
// (public , protected ,private)
// class parentcclass {
//       public $name1='adham';
//       protected $name2='mohamed';
//       private $name3='Ahmed';
//       public function print_name(){//? all can access inside the class 
//         print($this->name1);
//         print($this->name2);
//         print($this->name3);
//       }
// }
// class childclass extends parentcclass{
//   public function print_name(){
//     print($this->name2);//! name3 will not work 
//   }
// }
// $object1=new parentcclass;
// echo $object1->name1;//global scope 
// echo $object1->name2;//! can not be access in global protected 
// echo $object1->name3;//! can not be access in global private 
//h2 the Rule is 
/**
 * h2 public can be access any where 
 * h2 protected can be accessed in global and class that inherit child scope 
 * h2 private only can be accessed in class scope only
 */
//h1 Encapsulation 
// class user {
//     private $name;
//     public function setname($name)
//     {
//       # you can make any condition here before user can set it 
//       //! for example you can check if this string 
//       if(is_string($name)):
//       $this->name=$name;
//       else:
//           $this->name='Only Enter String';
//       endif;
//     }
//     public function getname(){
//       return $this->name;
//     }
// }
// $object = new user();
// $object->setname(1);
// echo $object->getname();
//h1 magic method 
// class product {
//   public function __construct(){
//     echo "ok";
//   }
//   public function __destruct(){
//     echo "ok2";
//   }
// }
// //? inherence 
// class specs extends product{

// }
// $object = new product();
// $object = new specs();//overwrite
// class human { //! extension called setter and getter 
//   private $color;
//   private $name;
//   private $email;
// }//! note that you can use constructor to pass all values when you create the object 
//h1 magic constant 
//? difference between relative path and absolute path when to use ? 
// class magicconstants{
  // public static function test(){
    // echo __DIR__;
    // echo __FILE__;
    // echo __CLASS__;
    // echo __FUNCTION__;
    // echo __METHOD__;
//     echo __LINE__;
//   }
// }
// magicconstants::test();
//h1 Abstraction method without body abstract class 
//! can't take object from abstract class but can inherit from it 
//! we can use it in CRUD Operation products , offers , coupons 
// abstract class person {
//   public static $email;
//   public $name;
//   public const pi=3.14;
//    protected abstract function login();//? should have implementation in child class 
//    public abstract function logout();
//    public function test(){

//    }
//    public static function test2(){

//    }
// }
// class user extends person   {
//   function login() {
//       # code ...  
    
//   }
//   function logout()   {
//     # code ...
//   }
// }
// class admins extends person {
//   function login() {

    
//   }
//   function logout()  {
    
//   }
// }
//h1 interface only abstract methods all public 
//! i can implement and extends from other class 
//! i can implement more than one interface multi 
//! methods can't be protected or public 
// interface curd {
//   function create();
//   function read();
//   function update();
//   function delete ();
// }
// interface operations {
//   function login();
//   function logout();
// }
// class parentcalss{

// }
// class products extends parentcalss implements curd,operations  {
//   function create(){

//   }
//   function read(){

//   }
//   function update(){

//   }
//   function delete (){

//   }
//   function login(){

//   }
//   function logout(){

//   }

// }



//?##################################################################################################################################
/*
  =====================================================================================
  ================================= Class & Object ====================================
  =====================================================================================
  */
  /**
   **  - Class Is a blueprint That U Can Create Object From 
   **  - Object is a Member in the Main Application
   ** 
   ** Apple 
   **  - Class = Apple blueprint Design
   **  - object = Iphones That China Made
   **  - Application = Apple Storea
   ** 
   ** Web Application Registration 
   **  - Class = code To add New Member
   **  - object = The Members
   **  - Application  Web Application Registration 
   */ 

//?##################################################################################################################################
  /*
  =====================================================================================
  ========================= Class & Object Advanced Example ===========================
  =====================================================================================
  */
  /**
   *  Blog System
     *  - Class  = Code To Add New Post,Article,News,Information
     *  - object = Post,Article,News,Information
     *  - Application  Blog System
   */
//   class AppleDevice {

//   }
// $iphone6plus=new AppleDevice();
// echo "<pre>";
// var_dump($iphone6plus);
// echo "</pre>";


//?##################################################################################################################################
 /*
  =====================================================================================
  ================================ Class Properties ===================================
  =====================================================================================
  */
  /**
   * var = public
   * class has properties
   * variale inside class=[property]
   * variable outside class =[variable]
   */
//     class AppleDevice {
//         // properties
//         public $ram;
//         var $inch;
//         public $space;
//         public $color;
//   }
//   $iphone6plus=new AppleDevice();
//   echo "<pre>";
//         var_dump($iphone6plus);
//   echo "</pre>";

//   $iphone7plus=new AppleDevice();
//   echo "<pre>";
//         var_dump($iphone7plus);
//   echo "</pre>";


//?##################################################################################################################################
 /*
  =====================================================================================
  ============================= Class Properties Change ===============================
  =====================================================================================
  */
  /** - [ class ] = keyword
   *  - [ new ] = New Object
   *  - [->] = object Operator
   *  - [ Public, Private, Protected ] = Visibility Markers
   */
//   class AppleDevice {
//     // properties
//     public $ram='1GB';
//     var $inch='4 Inch';
//     public $space='16 GB';
//     public $color='Silver';

// }
//     $iphone6plus=new AppleDevice();
//     $iphone6plus->ram='2GB';
//     $iphone6plus->inch='5 inch';
//     $iphone6plus->space='32GB';
//     $iphone6plus->color='GOLD';
//     echo "<pre>";
//         var_dump($iphone6plus);
//     echo "</pre>";
    
//     $iphone7plus=new AppleDevice();
//     $iphone7plus->ram='4GB';
//     $iphone7plus->inch='5.5 inch';
//     $iphone7plus->space='256GB';
//     $iphone7plus->color='Silver';
//     echo "<pre>";
//         var_dump($iphone7plus);
//     echo "</pre>";
//     $iphone=new AppleDevice();
//     echo "<pre>";
//         var_dump($iphone);
//     echo "</pre>";
//?##################################################################################################################################
 /*
  =====================================================================================
  ================================= Class Methods =====================================
  =====================================================================================
  */
  /**
   * Method is a function in class 
   * - Any Class Has Properties And Methods
   * - Function Inside Class = [ Method ]
   * - Function Outside class = [ Function ]
   */
//   class AppleDevice {
//     // properties
//     public $ram='1GB';
//     var $inch='4 Inch';
//     public $space='16 GB';
//     public $color='Silver';
//     public  function DoubleHomePressed() {
//         echo "This Device Does Not Support This Feature"."<br>";
//     }
// }
//     $iphone7plus=new AppleDevice();
//     $iphone7plus->ram='4GB';
//     $iphone7plus->inch='5.5 inch';
//     $iphone7plus->space='256GB';
//     $iphone7plus->color='Silver';
//     echo "<pre>";
//     var_dump($iphone7plus);
//     echo "</pre>";
//     ##########
//     $iphone6plus=new AppleDevice();
//     $iphone6plus->ram='2GB';
//     $iphone6plus->inch='5 inch';
//     $iphone6plus->space='32GB';
//     $iphone6plus->color='GOLD';
//     echo "<pre>";
//         var_dump($iphone6plus);
//     echo "</pre>";
//     $iphone6plus->DoubleHomePressed();
//?##################################################################################################################################
 /*
  =====================================================================================
  ====================================== $This ========================================
  =====================================================================================
  */
  /**
   * [ $this ] = Pseudo Variable [ Refer To Object properties ] معرف يشبه المتغير
   * Pseudo provide access to specific object properties
   */
//   class AppleDevice {
       // properties
//     public $ram='1GB';
//     var $inch='4 Inch';
//     public $space='16 GB';
//     public $color='Silver';
//     public $ownerName;
//     public  function SetOwnerName() {
//        if(strlen($this->ownerName) <3){
//             echo "Owner Name cant Be Less Than 3 chars";
//        }
//        else {
//                 echo "Your Name Has Been Set";
//        }
//     }}
//     $iphone7=new AppleDevice();
//     $iphone7->ownerName='Osama';
//     $iphone7->SetOwnerName();    
//?##################################################################################################################################
 /*
  =====================================================================================
  ================================= Class Constant ====================================
  =====================================================================================
  */
  /**
   * - [ :: ] = Scope Resolution Operator [Paaymayim Nekudotayim] = Double Colon
   * self refers to the class itself, while $this refers to the current object instance.
   * self is used for static properties and methods, while $this is used for non-static properties and methods.
   * self is resolved at compile time, while $this is resolved at runtime.
   */
//   class AppleDevice {
//     public $ram='1GB';
//     var $inch='4 Inch';
//     public $space='16 GB';
//     public $color='Silver';
//     public $ownerName;
//     //constant
//     const CHiP='A9';
//     const OWNERNAME=5;
//     public  function SetOwnerName() {
//        if(strlen($this->ownerName) < self::OWNERNAME){
//             echo "Owner Name cant Be Less Than ".self::OWNERNAME. " chars";
//        }
//        else {
//                 echo "Your Name Has Been Set";
//        }
//     }
// }
// $ipone6plus=new AppleDevice();
// $ipone6plus->ownerName='adham';
// //how to print owner name have two ways
// echo $ipone6plus::OWNERNAME;//object name 
// echo "<br>";
// echo  AppleDevice::OWNERNAME;// class name
// echo "<br>";
// $ipone6plus->SetOwnerName();
//?##################################################################################################################################
 /*
  =====================================================================================
  =================================== Self & This =====================================
  =====================================================================================
  */
  /**
   *  Self Vs $THIS
   *    -Self-
   *        * Refer To Current Class 
   *        * Access Static Members
   *        * Not Use ($) Because It's Not Represent variable but Present Class Construction
   *    -This-
   *        * Refer to Current Object
   *        * Access Non Static Members
   *        * Use ($) Because It Represent a variable
   */
//?##################################################################################################################################
 /*
  =====================================================================================
  ========================= Methods with Arguments Training ===========================
  =====================================================================================
  */
  /**
   * Training For Using Methods With Parameters
   */
//   class AppleDevice {
//     public $ram='1GB';
//     var $inch='4 Inch';
//     public $space='16 GB';
//     public $color='Silver';
//     public $ownerName;
//     // Methods
//     public function changespec($ram,$inch,$space,$color) {
//         $this->ram=$ram;
//         $this->inch=$inch;
//         $this->space=$space;
//         $this->color=$color;
//     }
// }
// $ipone7plus=new AppleDevice();
// $ipone7plus->changespec('2GB','2.5cm','32GB','Black');
// echo $ipone7plus->ram;
// echo "<br>";
// echo $ipone7plus->inch;
// echo "<br>";
// echo $ipone7plus->space;
// echo "<br>";
// echo $ipone7plus->color;

//?##################################################################################################################################
 /*
  =====================================================================================
  ================================= Encapsulation =====================================
  =====================================================================================
  */
  /**
   * Encapsulation
   */
//   class AppleDevice {
//     public  $ram='1GB';
//     public  $inch='4 Inch';
//     public  $space='16 GB';
//     public  $color='Silver';
//     private $lock;

//     public function changelock($lock){
//         $this->lock=sha1($lock);
//     }
//     public function print_lock(){
//         echo $this->lock;
//     }

// }
// $iphone7plus=new AppleDevice();
// $iphone7plus->changelock('adham2002');
// echo $iphone7plus->print_lock();
//?##################################################################################################################################
 /*
  =====================================================================================
  ==================================== Inheritance ====================================
  =====================================================================================
  */
  /**
   * 
   */
//   class AppleDevice {
//     public  $ram='1GB';
//     public  $inch='4 Inch';
//     public  $space='16 GB';
//     public  $color='Silver';

//         public function changespec($ram,$inch,$space,$color) {
//         $this->ram=$ram;
//         $this->inch=$inch;
//         $this->space=$space;
//         $this->color=$color;
//     }


// }
// class sony extends AppleDevice {
//     public $camera='25MB';
//     public $screen='LCD';
//     public function changespecs_new($ram,$inch,$space,$color,$camera) {
//         $this->ram=$ram;
//         $this->inch=$inch;
//         $this->space=$space;
//         $this->color=$color;
//     }
    

// }
// $sonyphone=new sony();
// $sonyphone->changespecs_new('4GB','5.5 inch','256 GB','red','30MB');
// echo $sonyphone->camera;
// echo "<br>";
// echo $sonyphone->color;
// echo "<br>";
// echo $sonyphone->ram;
// echo "<br>";
// echo $sonyphone->inch;
// echo "<br>";
// echo $sonyphone->space;
// echo "<br>";
// echo $sonyphone->screen;


//?##################################################################################################################################
 /*
  =====================================================================================
  =========================== Inheritance Override Training ===========================
  =====================================================================================
  */
  /**
   * Inheritance Override & training
   */
//?##################################################################################################################################
// class AppleDevice {// called superclass
//    public  $ram='1GB';
//    public  $inch='4 Inch';
//    public  $space='16 GB';
//    public  $color='Silver';
//    public $screen='LCD';
//    public  $name;

//        public function changespec($ram,$inch,$space,$color) {
//        $this->ram=$ram;
//        $this->inch=$inch;
//        $this->space=$space;
//        $this->color=$color;
//    }
//       public function sayhello($n){
//          $this->name=$n;
//          echo 'Welcome To Apple From Parent Class '.$n;
//    }


// }
// class sony extends AppleDevice {
//    public $camera='25MB';
//    public function sayhello($n){
//          $this->name=$n;
//          echo 'Welcome To Sony From Child Class '.$n;
//    }
   

// }
// $sonyphone=new sony();
// $sonyphone->changespec('4GB','5.5 inch','256 GB','red');
// echo $sonyphone->camera;
// echo "<br>";
// echo $sonyphone->color;
// echo "<br>";
// echo $sonyphone->ram;
// echo "<br>";
// echo $sonyphone->inch;
// echo "<br>";
// echo $sonyphone->space;
// echo "<br>";
// echo $sonyphone->screen;
// echo "<br>";
// $sonyphone->sayHello('Sony');
// echo "<br>";
// $apple=new AppleDevice;
// $apple->sayhello("Apple");
//*special case will create properity but you will not enable to inheirit it 
// $apple->price='50000$';
// echo $apple->anythingcreatebyme;
//?##################################################################################################################################

 /*
  =====================================================================================
  ================================= Final keyword  ====================================
  =====================================================================================
  */
  /**
   * Inheritance | Final Keyword
   * Final Keywork mean that you can't override function 
   */
//   final class AppleDevice{//error
//    public $ram='1GB';
//    public $inch='4 Inch';
//    public $space='16 GB';
//    public $color='Silver';
//    public $screen='LCD';
//    public $name;
//     public function changespce($ra,$in,$sp,$co){
//       $this->ram=$ra;
//       $this->inch=$in;
//       $this->space=$sp;
//       $this->color=$co;
//    }
//   final public function sayhello($n) {
//       $this->name=$n;
//       echo "Welcome To ".$n;
//    }
//   }
// class sony extends AppleDevice{
//    public $ram='1GB';
//    public $camera='25MB';
   //error
   // public function sayhello($n) {
   //    $this->name=$n;
   //    echo "Welcome  ".$n;
   // }
// }
// $ipone6plus=new AppleDevice();
// $ipone6plus->changespce('3GB','5 Inch','32GB','Gold');
// $ipone6plus->sayhello('iphone');
// echo "<pre>";print_r($ipone6plus); echo "</pre>";
// $sony=new sony();
// $sony->sayhello('sony');
// echo "<pre>";print_r($sony); echo "</pre>";
//?##################################################################################################################################
 /*
  =====================================================================================
  ================================= class Abstraction ====================================
  =====================================================================================
  */
  /**
   * Class Abstraction
   * -- Cannot Be Instantiated [ Cannot Create Object From ]
   * -- Made For Other Classes To Inherit Prop & Methods From
   * -- Can Have Methods & Properties
   * -- Can Have Abstracted Method And Non Abstracted Methods
   * -- Abstract Method contain No Body Code but can have agrs 
   */
// abstract class MakeDevice{
//    public $ram;
//    public function sayHello(){
//       echo "Say hello";
//    }
//    abstract public function saybye();
// }
// class AppleDevice extends Makedevice{
//    function saybye(){
//       echo "Bye Bye";
//    }
// }
// $ipone6plus=new AppleDevice();
// $ipone6plus->sayhello();
// echo "<br>";
// $ipone6plus->saybye();
// echo "<pre>";print_r($ipone6plus);echo "</pre>";
//?##################################################################################################################################
 /*
  =====================================================================================
  =============================== Abstraction Part 2 ==================================
  =====================================================================================
  */
  /**
   * Rules TO Go On
   * Forece Developers To Follow Your Methods
   */
//   abstract class MakeDevice{
//       abstract protected function testperformance();
//       abstract public function verifyOwner();
//       abstract public function saywelcome($n);
//      }
// class iphone extends Makedevice{
//    public $owner;
//       public function testperformance(){
//          echo "Performance Is Good 100%";
//       }
//       public function verifyOwner(){
//          echo "Owner Is Verfied";
//       }
//       public function saywelcome($n){
//          $this->owner=$n;
//          echo "Welcome User ".$this->owner;
//       }
// }
// class Ipad extends Makedevice{
//    public $owner;
//    public function testperformance(){
//       echo "Performance Is Good 100%";
//    }
//    public function verifyOwner(){
//       echo "Owner Is Verfied";
//    }
//    public function saywelcome($n){
//       $this->owner=$n;
//       echo "Welcome User ".$this->owner;
//    }

// }
// $iphone=new iphone();
// $iphone->saywelcome('Osama');
// echo "<pre>";print_r($iphone);echo "</pre>";

// $ipad=new Ipad();
// $ipad->saywelcome('Ahmed');
// echo "<pre>";print_r($ipad);echo "</pre>";
//?##################################################################################################################################
 /*
  =====================================================================================
  ================================= Polymorphism ====================================
  =====================================================================================
  */
  /**
   * Describes a pattern in OOP in which classes have different functionality while sharing a 
   * common interface.
   * The Beauty of Polymorphism that the code working with different classes does not need 
   * to know which class using since they're all used the same way.
   * - Polymorphisim
   *   - Have Methods without Body Code
   *   - 
   */
// interface DBConnects{
//    public function getUsers();
//    public function getArticles();
//    public function Showstarts();
// }  
//   class MySQL implements DBConnects {
//    public $name;
//    public function getusers(){
//       echo "SELECT * FROM Users";
//    }
//    public function getArticles(){
//       echo "SELECT * FROM Articles";
//    }
//    public function Showstarts(){
//       echo "SELECT * FROM stats";
//    }
//   }
//   class oracle implements DBConnects{
//    public function getusers(){
//       echo "Hello  FROM Users";
//    }
//    public function getArticles(){
//       echo "Hello  FROM Articles";
//    }
//    public function Showstarts(){
//       echo "Hello  FROM stats";
//    }
//   }
//   $row=new oracle();
//   $row->getusers();
//   echo "<br>";
//   $row->getArticles();
//   echo "<br>";
//   $row->Showstarts();
//   echo "<br>";
//   echo "<pre>";print_r($row);echo "<pre>";
//?##################################################################################################################################
 /*
  =====================================================================================
  =============================== Visibility Markers ==================================
  =====================================================================================
  */
  /**
   * Public , Private , Protected 
   * public : can be access from anywhere 
   * private : can't be access from anywhere just inside the class 
   * protected : can be access from inside the class and any class extends from it 
   */
//?##################################################################################################################################
 /*
  =====================================================================================
  ================================== Magic Methods ====================================
  =====================================================================================
  */
  /**
   * Magic Methods 
   *  - Method With Special Name Start With DoubleScore [ __ ] 
   *  
   *  Construct: 
   *  --- Called When Object Is Created
   *  --- can Be Inherited 
   */
  // class Iphone{
  //  public $name;
  //  public $ram;
  //  public function sayhello(){
  //     echo "Hello User";
  //  }
  //  public function __construct($name){
  //     $this->name=$name;
  //     echo "The Start Of Create Object"."<br>";

  //  }
  // }
  // $myiphone =new Iphone('adham');
  // $myiphone->sayhello();
  // echo "<pre>";
  // print_r($myiphone);
  // echo "</pre>";
//?##################################################################################################################################
 /*
  =====================================================================================
  =============================== Call  ==================================
  =====================================================================================
  */
  /**
   * Magic Methods
   *  - Methods With Special Name Start With DOuble underScore
   *  Call:
   *  - Called When Invoking Function Not Accessible Or Not Found
   *  - Accept Two Parameters [ $MethodName, $params]
   */
  // class Iphone{
  //  public $name;
  //  public $ram;
  //  public function __call($method,$params){
  //     echo 'The '.$method." Function Not Found Or Not Accessible<br>";
  //     print_r($params);
  //  }
  //   public function WelcomeToAPP($name,$size) {
  //     echo "Hello Osama";
  //   }
  // }
  // $phone=new Iphone();
  // $phone->WelcomeToAPP('Osama','2GB');
  // echo "<pre>";
  // print_r($phone);
  // echo "</pre>";
//?##################################################################################################################################
 /*
  =====================================================================================
  ============================= Magic Methods Get-set =================================
  =====================================================================================
  */
  /**
   * Magic Methods
   * - Methods With Special Name Start With DOuble underScore
   * Get:
   * - called when getting a property Not Accessible Or Not Found
   * - Accept one Parameter [ $PropertyName]
   * Set:
   * - called when setting a property Not Accessible Or Not Found
   * - Accept one Parameter [ $PropertyName]
   */
  // class Iphone{
  //   public $name;
  //   public $ram;
  //   private $color;
  //   // public function __get($prop){
  //   //   echo "The property ".$prop." Is Not Accessible Or Not Found<br>";
  //   // }
  //   public function __set($prop,$value){
  //     echo "The property ".$prop." Is Not Accessible Or Not Found<br>";
  //     echo "And you cannot assign a value to it $value<br>";
      
  //   }
  // }
  // $phone=new Iphone();
  // $phone->color='red';
  // $phone->ram='2GB';
  // echo "<pre>";
  // print_r($phone);
  // echo "</pre>";
//?##################################################################################################################################
 /*
  =====================================================================================
  =============================== Clone part 1  ==================================
  =====================================================================================
  */
  /**
   * Magic Methods 
   * - Methods With Special Name Start With DOuble underScore
   * magic methods clone & Clone Keyword
   * - Typical Copy of Object In Php works By Reference
   * Means Both (Main and Copied) Objecgt will be Interlinked
   */
  // class Iphone{
  //   public $name;
  //   public $email;
  //   public function __construct($name,$email){
  //     $this->name=$name;
  //     $this->email=$email;
  //   }
  // }
  // $phone=new Iphone('Adham',"adham@gmail.com");
  // // $copy = $phone;// reference to each other
  // $copy = clone $phone;// now copy is difference object
  // $phone->name='Sayed';
  // $copy->name='Mohamed';// change happen only in object copy 

  // echo "<pre>";
  // print_r($phone);
  // echo "</pre>";

  // echo "<pre>";
  // print_r($copy);
  // echo "</pre>";
//?##################################################################################################################################

 /*
  =====================================================================================
  ================================= Clone Part 2 ====================================
  =====================================================================================
  */
  /**
   * -- The Clone Operation creates a so-called shallow copy of the original instance.
   * Which mean that it constructs a new object with all Fields Duplicated
   * -The above technique works with a class having data members that are of intrinsic type int, string, etc
   * How ever, This technique will not work with a class that has a data member which is an object of another class. In such a Scenario, The Cloned Object continues to share the
   * reference of the data member object of the class that was cloned 
   * - Magi Method Clone Executes When Object cloning performed
   */
  //   class Iphone{
  //   public $name;
  //   public $email;
  //   public function __construct($name,$email){
  //     $this->name=$name;
  //     $this->email=$email;
  //   }
  //   public function __clone(){
  //     $this->name=clone $this->name;

  //   }
  // }
  // $phone=new Iphone('Adham',"adham@gmail.com");
  // // $copy = $phone;// reference to each other
  // $copy = clone $phone;// now copy is difference object
  // $phone->name='Sayed';
  // $copy->name='Mohamed';// change happen only in object copy 

  // echo "<pre>";
  // print_r($phone);
  // echo "</pre>";

  // echo "<pre>";
  // print_r($copy);
  // echo "</pre>";
//?##################################################################################################################################
 /*
  =====================================================================================
  ========================= Static Properties and Methods ============================
  =====================================================================================
  */
  /**
   * [ Static Keyword ]
   * - static properties/methods are Used to Access properties/Methods in a Global Scope
   * 
   * - Declaring class properties or Methods as static
   * Makes Then Accessible Without Needing an Instantitation of the Class.
   * 
   * -Because Static Methods are callable without an Instance of the Object Created
   * The Pseudo-Variable $this is not Available Inside The Method Declared as static
   * 
   * -A property Declared as static can be accessed with an instantiated class Object (Though a Static Method Can)
   * 
   * - One of the Major Benfits to Using static properties
   * is that They keep their stored Values for the Duration of the Script
   */
  // class Iphone{
  //   public static  $name="Adham";
  //   public $ram='2GB';
  //   public static function say_hello(){
  //     // echo $this->name;// not in the world of contenxt 
  //     return "hello";
  //   }
  // }
  // $phone=new Iphone();
  // echo $phone->name;// Accessing static property Iphone::$name as non static in
  // echo Iphone::say_hello()."<br>";
  // echo IPhone::$name;
//?##################################################################################################################################
 /*
  =====================================================================================
  ================================ Methods Chaining ===================================
  =====================================================================================
  */
  /**
   * Methods Chaining
   * - When a class's Methods Return The $this Keyword,They Can Be Chanied Together
   */
  // class Iphone{
  //   public $name;
  //   public $email;
  //   public function presspower(){
  //     echo 'You Have Pressed The Power Button<br>';
  //     return $this;
  //   }
  //   public function  bootphone(){
  //     echo 'The Phone Is Booting<br>';
  //     return $this;
  //   }
  //   public function saywelcome(){
  //     echo 'welcome to Iphone<br>'; 
  //     return $this;
  //   }
  // }
  // $phone=new Iphone();
  // // $phone->presspower();
  // // $phone->bootphone();
  // // $phone->saywelcome();
  // $phone->presspower()->bootphone()->saywelcome();
  // echo "<pre>"; print_r($phone); echo "</pre>";
//?##################################################################################################################################
 /*
  =====================================================================================
  ================================ Traits Part 1 ===================================
  =====================================================================================
  */
  /**
   * Trait => PHP 5.4
   * - A Mechanism for code reuse in single inheritance languages Such As PHP.
   * - Problem With Extending Classes, Is That U Can Only Extend One. This Is A Little Limiting.
   * - With Traits , its possible for php classes to Inherit from Multiple Classes
   * 
   * - You cannnot Extends Or implements.
   * - you Cannot Instantitate
   * - Its Supporting Class Not Replacing It.
   * - Can Have Methods.
   * - Have Priority Over Class
   */
//?##################################################################################################################################
 /*
  =====================================================================================
  ================================ Traits Part 2 ===================================
  =====================================================================================
  */
  /**
   * 
   */
  // trait fingerprint{
  //   public function fingerfeature(){
  //     echo "this is finger print feature<br>";
  //   }
  // }
  // trait ThreeDimensionTouch{
  //   public function ThreeD(){
  //     echo "this is 3D Touch feature<br>";
  //   }
  // }
  // trait FaceDetection{
  //   public function facefeature(){
  //     echo "this is face Detect feature<br>";
  //   }
  // }
  // class Iphone{
  //   use fingerprint;
  //   use ThreeDimensionTouch;
  //   use FaceDetection;
  //   function sayhello(){
  //     echo "hello From IPhone";
  //   }
  // }
  
  // class sony{
  //   use FaceDetection;
  // }
  // class Nokia{

  // }
  // $phone=new Iphone();
  // echo "<pre>"; print_r($phone); echo "</pre>";
  // $phone->fingerfeature();
  // $phone->ThreeD();
  // $phone->facefeature();
  // $phone->sayhello();
  // echo "<hr>";
  // $sony=new sony();
  // echo "<pre>"; print_r($sony); echo "</pre>";
  // $sony->facefeature();
  // echo "<hr>";
  // $nokia=new Nokia();
  // echo "<pre>"; print_r($nokia); echo "</pre>";
  // echo "<hr>";
//?##################################################################################################################################
 /*
  =====================================================================================
  ================================ Traits Part 3 ===================================
  =====================================================================================
  */
  // trait fingerprint{
  //   public function fingerfeature(){
  //     echo "this is finger print feature<br>";
  //     return $this;
  //   }
  // }

  // trait ThreeDimensionTouch{
  //   public function ThreeD(){
  //     echo "this is 3D Touch feature<br>";
  //     return $this;
  //   }
  // }

  // trait FaceDetection{
  //   public function facefeature(){
  //     echo "this is face Detect feature<br>";
  //     return $this;
  //   }
  // }

  // trait allfeatures{
  //   use fingerprint,ThreeDimensionTouch,FaceDetection;
  // }
  // class Iphone{
  //     use allfeatures;
  //   function sayhello(){
  //     echo "hello From IPhone";
  //     return $this;
  //   }
  // }
  
  // class sony{
  //   use FaceDetection;
  // }
  // class Nokia{

  // }
  //!----------------------------------------- new 
  // trait myfeature{
  //       public function sayHello(){
  //         echo "hello from trait";
  //       }
  // }
  // class AppleDevice{
  //   public function sayhello() {
  //     echo "hello from class";
  //   }
    
  // }
  // class Iphone extends AppleDevice{
  //   use myfeature;
  // }
  // $phone=new Iphone();
  // echo "<pre>"; print_r($phone); echo "</pre>";
  // // $phone->fingerfeature()->ThreeD()->facefeature()->sayhello();//try the cahin 
  // $phone->sayhello();//given higher perority for trait
 /*
  =====================================================================================
  ================================= Traits Part 4 ====================================
  =====================================================================================
  */
  /**
   * 
   */
//     trait myfeature1{
//         public function feature(){
//           echo "This is Feature Number One<br>";
//         }
//   }
//   trait myfeature2{
//     public function feature(){
//       echo "This is Feature Number Two<br>";
//     }
// }
//   class iphone{
//     use myfeature1, myfeature2{
//       // [Trait Name] [::] [Method Name] [Keyword as] [New name]
//       myfeature2:: feature as f2adham;
//       // [Trait Name] [::] [Method Name] [Insteadof Other Method Name]
//       myfeature1::feature insteadof myfeature2;
//     }

//   }
//   $phone=new Iphone();
//   echo "<pre>"; print_r($phone); echo "</pre>";
//   $phone->feature();// تصادم هيحصل هنا 
//   $phone->f2adham();
//?##################################################################################################################################
 /*
  =====================================================================================
  ================================= Namespace Part 1 ====================================
  =====================================================================================
  */
  /**
   * NameSpace => Two Classes have The Same Main :)  
   */
  // class Testing {// global Class Namespace
  //   public $test;
  // }
  // $test=new Testing();
  // echo "<pre>"; print_r($test); echo "</pre>";
//?##################################################################################################################################
 /*
  =====================================================================================
  ================================= Namespace Part 2 ====================================
  =====================================================================================
  */
  /**
   * How To Use NameSpace
   * namespaceاعبتر ان كل كلاس ليه كوكب بيعيش فيه تحت مظلة  
   */
  // require_once 'apple.php';
  // require_once 'sony.php';
  // require_once 'lg.php';
  // namespace Apple;
  // class createphone{ // sepeate in different file apple.php
  //   public $name;
  //   public function sayhello(){
  //     echo "hello from Apple Company";
  //   }
  // }
  // namespace Sony;
  // class createphone{// sepeate in different file sony.php
  //   public $name;
  //   public function sayhello(){
  //     echo "hello from Sony Company";
  //   }
  // }
  // namespace LG;
  // class createphone{// sepeate in different file Lg.php
  //   public $name;
  //   public function sayhello(){
  //     echo "hello from LG Company";
  //   }
  // }
  // $iphone=new sony\createphone();//add namespace here
  // $iphone->sayhello();
//?##################################################################################################################################
 /*
  =====================================================================================
  ================================= Namespace Part 3 ====================================
  =====================================================================================
  */
  /**
   * NameSpace => Two Classes have The Same Main :)  
   * not good to have more than one namespace in the same file 
   */
    // require_once 'apple.php';
    // require_once 'sony.php';
    // require_once 'lg.php';
    //comm
    // namespace Apple\Hardware\phones;
    // class createphone{ // sepeate in different file apple.php
    //   public $name;
    //   public function sayhello(){
    //     echo "hello from Apple Company";
    //   }
    // }
    // namespace Apple\Hardware\pcs;
    // class createTablet{ // sepeate in different file apple.php
    //   public $name;
    //   public function sayhello(){
    //     echo "hello from Tablet Company";
    //   }
    // }
    //comm
    // $iphone=new Apple\Hardware\pcs\createTablet();//add namespace here
    // $iphone->sayhello();
//?##################################################################################################################################

 /*
  =====================================================================================
  ================================= Auto Load Classes ====================================
  =====================================================================================
  */
  /**
   * not good to do a lot of require for each class 
   * the name of the file should be the same name of the calss
   */
  //! make A seprate folder for all classes and put your classes files inside it 
  // spl_autoload_register(function($class){
  //   require "classes/".$class.".php";
  // });
  // $var=new test2();
  // $var->test2();
//?##################################################################################################################################