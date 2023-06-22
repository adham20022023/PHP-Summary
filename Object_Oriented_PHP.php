<?php

  /*
  =====================================================================================
  ================================= Class & Object ====================================
  =====================================================================================
  */
  /**
   *  - Class Is a blueprint That U Can Create Object From 
   *  - Object is a Member in the Main Application
   * 
   * Apple 
   *  - Class = Apple blueprint Design
   *  - object = Iphones That China Made
   *  - Application = Apple Storea
   * 
   * Web Application Registration 
   *  - Class = code To add New Member
   *  - object = The Members
   *  - Application  Web Application Registration 
   */ 

//*##################################################################################################################################
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


//*##################################################################################################################################
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


//*##################################################################################################################################
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
//*##################################################################################################################################
 /*
  =====================================================================================
  ================================= Class Methods =====================================
  =====================================================================================
  */
  /**
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
//*##################################################################################################################################
 /*
  =====================================================================================
  ====================================== $This ========================================
  =====================================================================================
  */
  /**
   * [ $this ] = Pseudo Variable [ Refer To Object properties ]
   * 
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
//*##################################################################################################################################
 /*
  =====================================================================================
  ================================= Class Constant ====================================
  =====================================================================================
  */
  /**
   * - [ :: ] = Scope Resolution Operator [Paaymayim Nekudotayim] = Double Colon
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
//*##################################################################################################################################
 /*
  =====================================================================================
  =================================== Self & This =====================================
  =====================================================================================
  */
  /**
   *  Self Vs $THIS
   *    -Self-
   *        *Refer To Current Class 
   *        * Access Static Members
   *        * Not Use ($) Because It's Not Represent variable but Present Class Construction
   *    -This-
   *        *Refer to Current Object
   *        * Access Non Static Members
   *        * Use ($) Because It Represent a variable
   */
//*##################################################################################################################################
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

//*##################################################################################################################################
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
//*##################################################################################################################################
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


//*##################################################################################################################################
 /*
  =====================================================================================
  =========================== Inheritance Override Training ===========================
  =====================================================================================
  */
  /**
   * Inheritance Override & training
   */
//*##################################################################################################################################
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
//special case will create properity but you will not enable to inheirit it 
// $apple->price='50000$';
// echo $apple->anythingcreatebyme;
//*##################################################################################################################################

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
//*##################################################################################################################################
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
//*##################################################################################################################################
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
//*##################################################################################################################################
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
//*##################################################################################################################################
 /*
  =====================================================================================
  =============================== Visibility Markers ==================================
  =====================================================================================
  */
  /**
   * 
   */
//*##################################################################################################################################
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
//   class Iphone{
//    public $name;
//    public $ram;
//    public function sayhello(){
//       echo "Hello User";
//    }
//    public function __construct($name){
//       $this->name=$name;
//       echo "The Start Of Create Object"."<br>";

//    }
//   }
//   $myiphone =new Iphone('adham');
//   $myiphone->sayhello();
//   echo "<pre>";
//   print_r($myiphone);
//   echo "</pre>";
//*##################################################################################################################################
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
//   class Iphone{
//    public $name;
//    public $ram;
//    public function __call($method,$params){
//       echo 'The '.$method." Function Not Found Or Not Accessible<br>";
//       print_r($params);
//    }
//   }
//   $phone=new Iphone();
//   $phone->WelcomeToAPP('Osama','2GB');
//   echo "<pre>";
//   print_r($phone);
//   echo "</pre>";
//*##################################################################################################################################
 /*
  =====================================================================================
  =============================== Visibility Markers ==================================
  =====================================================================================
  */
  /**
   * 
   */
//*##################################################################################################################################
 /*
  =====================================================================================
  =============================== Visibility Markers ==================================
  =====================================================================================
  */
  /**
   * 
   */
?>