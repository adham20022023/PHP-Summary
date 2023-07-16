<?php
//ابحث عن كلمة تكليفات لايجاد الحلول 
// define("hello", 'adham');
  /*
  ===================================================================================
  ===================== Introduction & Important Information ========================
  ===================================================================================
  */
  //What Can You Do With PHP
  // Create Dynamic Pages
  // Create, Open, Read, Write, And Delete Files On The Server 
  // Encrypt And Decrypt Data
  // Deal With Databases
  // Deal With Images And Files
  // Deal With Browser Cookies
  //======================================================
  //Why To learn PHP$
  // Easy To Install And Learn
  // Big Community For Support
  // Famous Framework “Laravel”
  // Work With Many Databases
  // Work With All Hosting Services  
//?##################################################################################################################################

  /*
  ===================================================================================
  ===================== PHP Tags And Instructions Separation ========================
  ===================================================================================
  */
  //   echo 'We Love PHP';
  //   echo '<br>';

  //   ECHO "We Love PHP";
  //   ECHO '<br>';

  //   print 'We Love PHP';
  //   print '<br>';

  //   PRINT 'We Love PHP';
  //   PRINT '<br>';
  /* <?='We Love PHP With Short Tag';?>*/ //short tag
//?##################################################################################################################################

/*

*/
// Single Line Comment
// echo 'Test'; // Single Line Comment
// echo 'Test'; # Single Line Comment
/*
Line 1
Line 2
*/
/*
====================
== My Special App ==
====================
*/

/* Single Line */

// echo 'Test' /* Single Line */;
// we can use 'print' without parenthesis for creating a print statement in php
// I Used Print Because Its Faster Than Echo <= Example Not True // print 'Test' ;
    //?##################################################################################################################################
    /*==========================================================================================================Introduction
    to data
    types================================================================================================================bool=>
    Boolean
    = int => Integer
    = float => Floating Point Number | double
    = string
    = array
    = Other Types
    = gettype()
    ============================================
    */

    // echo gettype(True);//boolean
    // echo '<br>';
    // echo gettype(False);//boolean
    // echo '<br>';
    // echo gettype(true);//not case sensitve
    // echo '<br>';
    // echo gettype(100);//integer
    // echo '<br>';
    // echo gettype(-200);//integer
    // echo '<br>';
    // echo gettype(0);//integer
    // echo '<br>';
    // echo gettype(70.30);//double
    // echo '<br>';
    // echo gettype(-60.30);//double
    // echo '<br>';
    // echo gettype('Elzero');//string
    // echo '<br>';
    // echo gettype("Elzero");//string
    // echo '<br>';
    // echo gettype(array("EG" => "Egypt", "KSA" => "Saudi Arabia"));//array with keys and values
    // echo '<br>';
    // echo gettype(array("Egypt", "Saudi Arabia"));//array with only values
    // echo '<br>';
    // echo gettype(["Egypt", "Saudi Arabia"]);//another way to define array[]
    #**#################################################################################################################################
    ?>
    <!-- /*
  ===================================================================================
  ==================== PHP Bootcamp Assignments Lesson 1 to 5 =======================
  ===================================================================================
  */ -->
    <!-- /*
  asfsdf
  dfdsfdsf
  fdfsdfdsfd
  fsdfsdfdsf
  */
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="<?php echo 'UTF-8' ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'My First PHP Page' ?></title>
  </head>

  <body>
    <div><?php echo 'We Love' ?></div>
    <div><?php echo 'Elzero Channel' ?></div>

    <?php
    // echo 'Prevent Me From Running Please';
    # echo 'Prevent Me From Running Please';
    /* echo 'Prevent Me From Running Please'; */

    /*
      - My Application
      - Version 1.0
      - Created By Elzero
      */



    // All comments are wrong
    // ## First Comment
    # // # Second Comment
    /* /* /* Third Comment */
    ////// Fourth Comment

    ?>
  </body>
  </html>
  -->
    <?php
//?##################################################################################################################################

  /*
  ===================================================================================
  ================= Type Juggling And Automatic Type Conversion =====================
  ===================================================================================
  */
    /*
    ============================================
    = Data Types
    = ----------
    = Type Juggling + Automatic Type Conversion
    ============================================
    */
    
    // echo 1 + "2"; // 3
    // echo '<br>';
    // echo gettype(1 + "2"); // Integer 
    // echo '<br>';
    // //note when we try to print true it will give us '1'
    // //but in false case it will give empty string ''
    // echo True; // 1
    // echo false;
    // echo '<br>';
    // echo gettype(True); // Boolean
    // echo '<br>';
    // echo True + True; // 2
    // echo '<br>';
    // echo gettype(True + True); // Integer
    // echo '<br>';
    // error_reporting(E_ERROR | E_PARSE); // function can be used for hiding warning
    // echo 5 + '5 Lessons'; // 10 => Warning
    // echo '<br>';
    // echo gettype(5 + '5 Lessons'); // Integer => Warning
    // echo '<br>';
    // echo 10 + 15.5; // 25.5
    // echo '<br>';
    // echo gettype(10 + 15.5); // double => Float
    // echo '<br>';
//?##################################################################################################################################

  /*
  ===================================================================================
  ================================== Type Casting ===================================
  ===================================================================================
  */
  /*
    ============================================
    = Data Types
    = ----------
    = Type Casting
    = ----------------------
    = "boolean" or "bool"
    = "integer" or "int"
    = "float" or "double" or "real"
    = "string"
    = "array"
    = "object"
    = "null"
    = ------
    = Search For Settype 
    ex: $x="Welcome 3";
        settype($x,"integer"); //$x is now 3 (Integer)
    ============================================
    */

    // echo 5 + (int) "5 Lessons";
    // echo '<br>';
    // echo 5 + (integer) "5 Lessons";
    // echo '<br>';
    // echo 5 + (integer) "5 Lessons";
    // echo '<br>';
    // echo gettype(5 + (int) "5 Lessons");
    // echo '<br>';
    // echo 10 + 15.5;
    // echo '<br>';
    // echo 10 + (int) 15.5;
    // echo '<br>';
    // echo gettype(10 + (int) 15.5);
    // echo '<br>';
    // echo 10.5 + 10.5;
    // echo '<br>';
    // echo gettype(10.5 + 10.5);
    // echo '<br>';
    // echo (int) 10.5 + (int) 10.5; // 20
    // echo '<br>';
    // echo gettype((int) 10.5 + (int) 10.5);
    // echo '<br>';
    // echo (int) (10.5 + 10.5); // 21
    // $x=NULL;
    // echo gettype($x);
    /*notice
     when try to casting string => int it will take only number at the beginning of string
     if he didn't found number will return zero */
//?##################################################################################################################################

  /*
  ===================================================================================
  ======================== Boolean And Converting To Boolean ========================
  ===================================================================================
  */
    /*
    ============================================
    = Data Types
    = ----------
    = Boolean + Converting To Boolean
    ============================================
    any none empty value for variable will give one 
    */
    // var_dump((bool) "");//empty
    // echo '<br>';
    // var_dump((bool) array());//empty
    // echo '<br>';
    // var_dump((bool) []);//empty
    // echo '<br>';
    // var_dump((bool) 0);
    // echo '<br>';
    // var_dump((bool) "0");
    // echo '<br>';
    // var_dump((bool) "Elzero");
    // echo '<br>';
    // var_dump((bool) array(1));
    // echo '<br>';
    // var_dump((bool) [1]);
    // echo '<br>';
    // var_dump((bool) 100);
    // echo '<br>';
    // var_dump((bool) -100);
    // echo '<br>';
    // var_dump((bool) 10.5);
    // echo '<br>';
    // var_dump((bool) -10.5);
//?##################################################################################################################################

  /*
  ===================================================================================
  =============================== String And Escaping ===============================
  ===================================================================================
  */
  /*
  ============================================
  = Data Types
  = ----------
  = String And Escaping
  = -------------------
  = nl2br() stand for => newline to break convert "\n" => "<br>"
  = notice "\n" will work only with string inside "" double quotes ||| single quotes ' ' will not work  
  ============================================
  */
  // echo 'Hello PHP';
  // echo '<br>';
  // echo "Hello PHP";
  // echo '<br>';
  // echo "Hello 'PHP'";
  // echo '<br>';
  // echo 'Hello "PHP"';
  // echo '<br>';
  // echo 'Hello \'PHP\'';
  // echo '<br>';
  // echo "Hello \"PHP\"";
  // echo '<br>';
  // echo "Hello PHP\\";
  // echo '<br>';
  // echo 'Hello PHP
  // On Multiple
  // Lines';
  // echo '<br>';
  // echo nl2br('Hello PHP
  // On Multiple
  // Lines');
//?##################################################################################################################################

  /*
  ===================================================================================
  =============================== Heredoc And Nowdoc ================================
  ===================================================================================
  */
  /*
  Heredoc And Nowdoc
  ============================================
  = Data Types
  = ----------
  = String And Escaping
  = -------------------
  = Heredoc
  = Nowdoc
  hint "" or nothing => all work 
  '' => nothing will work
  ============================================
  */

  $name = "Osama";
  // Heredoc
  // echo <<<"Here"
  // Hello PHP
  // Special Characters $$$ ' ' ' """"" \\\\
  // Hello My Name Is $name
  // Here;

  // echo '<br>';

  // // Nowdoc
  // echo <<<'Now'
  // Hello PHP
  // Special Characters $$$ ' ' ' """"" \\\\
  // Hello My Name Is $name
  // Now;

  // echo '<br>';

  // echo '<ul>';
  //   echo "<li>" . $name . "</li>";
  //   echo "<li>" . $name . "</li>";
  //   echo "<li>" . $name . "</li>";
  //   echo "<li>" . $name . "</li>";
  // echo '</ul>';

  // echo '<br>';

  // $x=<<<"navlinks"
  //     <ul>
  //     <li>$name</li>
  //     <li>$name</li>
  //     <li>$name</li>
  //     <li>$name</li>
  //   </ul>
  // navlinks;
  //   echo $x;
//?##################################################################################################################################

  /*
  =================================================================
  =================== Array With Complex Tests ====================
  =================================================================
  */
  /*
    ============================================
    = Data Types
    = ----------
    = Array
    = -------------------
    = Array With Key
    = Array Without Keys
    = Array With One Key
    = Array Value Override
    = ------------------
    = print_r()
    ============================================
    */
    // echo '<pre>';
    // print_r([
    //   0 => "Sameh",//override by Asmaa
    //   "A" => "Ahmed",
    //   "B" => "Basem",
    //   "Mahmoud",
    //   True => "Sayed",
    //   "1" => "Osama",
    //   "Gamal",
    //   9 => "Amera",
    //   "Eman",
    //   "Mohamed",
    //   False => "Asmaa",
    //   8 => "Haytham",
    //   "Samer",
    //   "Names" => [
    //     "Osama",
    //     "Ahmed",
    //     "Sayed" => [
    //       "1",
    //       "2",
    //       "3"
    //     ]
    //   ]
    // ]);
    // echo '</pre>';
  //
#**#################################################################################################################################
  /*
  ==================================================================
  ============ تكليفات PHP Bootcamp من الدرس 6 إلى 12 ============
  ==================================================================
  */
  // //التكليف 01
  // echo (int)(15.2 + 14.7) + (10.5 + 10.5); // 50
  // echo '<br>';
  // echo gettype((int)(15.2 + 14.7 + (10.5 + 10.5))); // Integer
  // echo '<br>';
  /////////////////////////////////////
  // //التكليف 02
  // echo gettype(100);
  // echo "<br>";
  // var_dump(100);
  // echo "<br>";
  // if(is_int(100))
  // echo "int <br>";
  /////////////////////////////////////
  // //التكليف 03
  // echo 'Hello "Elzero" \\\\ """ We Love "$$PHP"';
  // echo "<br>";
  /////////////////////////////////////
  // //التكليف 04
  // echo nl2br("We <br> Love \n Elzero \n Web \n School");
  // echo '<br>';
  /////////////////////////////////////
  // //التكليف 05****
  // echo nl2br(<<<'start'
  // Hello "'Elzero'"
  // We Love $Programming$
  // Languages Specially "PHP"
  // start);
  // echo '<br>';
  /////////////////////////////////////
  // //التكليف 06
  // $something = "Programming";

  // echo <<<code
  //         Hello \PHP\
  //         We Love $something
  //         code;
  // echo '<br>';  
  /////////////////////////////////////  
  // //التكليف 07
  // var_dump((int)(bool)("Hello PHP"));
  // echo '<br>';
  // echo is_int((int)(bool)("Hello PHP"));
  // echo '<br>';
  // echo gettype((int)("Hello PHP"));
  /////////////////////////////////////
  //التكليف 08
  // echo "<pre>";
  // print_r([
  // 'FrontEnd' =>[
  //   "HTML",
  //   "CSS",
  //   "JS" =>[
  //     "Vuejs" =>[
  //       "v2",
  //       "v3"
  //     ],
  //     "Reactjs",
  //     "svelte"
  //     ]
  // ],
  // 'Backend' =>
  //   ["PHP","MySQL","Security"],
  //   '0'=>"Git",
  //   'Github',
  //   'Testing' => [
  //     'unit testing',
  //     'End To End',
  //     'Integration'
  //     ]
  // ]);
  // echo '</pre>';
//?##################################################################################################################################

  /*
  ===================================================================================
  =================== Introduction To Variables And Naming Rules ====================
  ===================================================================================
  */
  /*
      Variables
      - Naming Rules + Info
      [1] Start With Dollar Sign $
      [2] Start With A Letter [a-z] Or [A-Z] Or Underscore
      [3] You Can Use Numbers Inside The Name
      [4] No Special Characters Allowed
      [5] Case Sensitive
      - Test Single And Double Quotes

      Search
      - Loosely Typed Language
      Ans:
      A loosely typed language is a programming language that does not require a variable to be defined. For example,
      Perl is a loosely typed language, you can declare a variable, but it doesn't require you to classify the type of variable. 
    */
    // $username="Elganzoury"; //declare a variable
    // $username="Adham"; //redeclare a variable
    // $Username="Ashraf"; // case sensitive

    // echo $username; 
    // echo "<br>";
    // echo $Username;
    // echo '<br>';
    // echo "Hello $username";//double quotes
    // echo '<br>';
    // echo 'Hello $username';//single quotes
    
//?##################################################################################################################################

  ?>
    <!-- 
    ===================================================================================
    ======================== Testing Variables in Real World ==========================
    ===================================================================================
    -->
    <!-- <?php $username="Adham" ?>
    <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PHP Page<?php echo $username  ?></title>
    </head>
    <body>
      <div>Welcome <?php echo $username  ?> </div>
      <div>You Scored 1000 point</div>
      <div><?php include("include.php") ?></div>
    </body>
  </html> -->
    <?php
//?##################################################################################################################################

  /*
  ===================================================================================
  =============================== Variable Variable =================================
  ===================================================================================
  */
    /*
      Variable Variable
      Takes The Value of A Variable and Treats As The Namr Of A variable
    */

    // $a = "osama";
    // $$a = "elzero";
    // $$$a = "school";

    // echo $a;//osama
    // echo "<br>";
    // echo $$a;//elzero
    // echo "<br>";
    // echo $osama;//elzero
    // echo "<br>";
    // echo $$$a;//school
    // echo "<br>";
    // echo $elzero;//school
    // echo "<br>";
    // echo "Hello ${$a}"; // $$a الكتير جو الشوية برا 
    // echo "<br>";
    // echo "Hello ${$$a}"; // $$$a
//?##################################################################################################################################

  /*
  ===================================================================================
  ======================== Assign By Value And By Reference =========================
  ===================================================================================
  */
    /*
    * Assign Variable By Reference 
      * By Default, variables are Always Assigned By Value
      * Assigned By Reference Make variable Alias Or Point To Another
      
      Search 
      References Are Not Pointers
      */
      // $a="Adham";
      // $b=&$a; # $a refer to $b
      // $b="Elganzoury";
      // $a="Ashraf";
      // echo $a;
      // echo '<br>';
      // echo $b;
//?##################################################################################################################################

  /*
  ===================================================================================
  ========================= Predefined Variables And Test  ==========================
  ===================================================================================
  */
    /*
    * Pre-Defined Variables  متغيرات محددة مسبقة
      * Search 
        * PHP Pre-Defined Variables  
        * Isset function  The isset() function checks whether a variable is set, 
          which means that it has to be declared and is not NULL. This function returns true if the variable exists and is not NULL,
          otherwise it returns false
    */
  // echo '<pre>';
  // print_r($_SERVER);
  // echo $_SERVER["HTTP_SEC_CH_UA_PLATFORM"];//key
  // echo '</pre>';
  ////////////////////////////////////////
    // if (isset($_POST["username"]))//we can use !empty
    //   echo $_POST["username"];
  ?>
    <!-- <form action="" method="post">
      <input type="text" name="username">
      <input type="submit" name>
  </form> -->
    <?php
//?##################################################################################################################################

  /*
  ===================================================================================
  =========================== Introduction To Constants  =============================
  ===================================================================================
  */
    /*
      Constants
        -That Value Cannot change During Execution
        -Constants Always Uppercase => best practice
    */

      // define("DB_NAME","AAIE");
      // define("MAIN_NUMBER",5);
      // // define("MAIN_NUMBER",10);//error
      // echo DB_NAME;
      // echo "<br>";
      // echo MAIN_NUMBER *50;
//?##################################################################################################################################

  /*
  ===================================================================================
  ======================== Predefined And Magic Constants  ==========================
  ===================================================================================
  */
    /*
      Pre-Defined Constants [case Sensitive]
      - PHP_VERSION
      - PHP_OS_FAMILY
      - PHP_INT_MAX
      - DEFAULT_INCLUDE_PATH

      Magic Constants [Case Insensitive]
      -__LINE__
      -__FILE__
      -__DIR__

      Reserved Keywords
      -break
      -clone


      Search
      - PHP Predefined Constants
      - Compile Time Vs Runtime
      - List of Reserved words 
    */

    // echo php_uname(); //information about operating system 
    // echo "<br>";
    // echo PHP_VERSION;// PHP Version
    // echo "<br>";
    // echo PHP_OS_FAMILY;// only operating system
    // echo "<br>";
    // echo PHP_INT_MAX;//64bit
    // echo "<br>";
    // echo DEFAULT_INCLUDE_PATH;
    // echo "<br>";
    // echo __LINE__;// line number =691
    // echo "<br>";
    // echo __file__;//the current path for index.php file
    // echo "<br>";
    // echo __DIR__;
    // echo "<br>"; 
    // define("CLONE","AA");//error => reversed word
    // echo CLONE; // error
    // no problem here
    // function hello() {
    //   return hello;
    // }
    // echo hello();
    //Clone => Reserved word syntax error
    // function clone() {
    //   return hello;
    // }
    // echo clone();
#**###############################################################################################################################
  /*
  ===================================================================================
  =================== تكليفات PHP Bootcamp من الدرس 13 إلى 19  ====================
  ===================================================================================
  */
  // التكليف 01
  ?>
    <!-- <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Elzero Courses">
      <title>Welcome To Elzero Courses</title>
    </head>
    <body>
      <?php $title="Elzero Courses"; ?>
      <h1><?php  echo $title ?></h1>
      <p>Here In <?php echo  $title ?> We Provide Front-End And Back-End Courses</p>
      <hr>
      <div><?php echo  $title ?> Is The What You Need.</div>
      <footer>All Right Reserved To <?php echo $title ?></footer>
    </body>
  </html> -->
    <?php 
  //التكليف 02
  // $name = "elzero";
  // $$name = "Web";
  // echo $elzero;
  // echo "<br>";
  // echo $$name;
  // echo "<br>";
  // echo "${$name}";
  // echo "<br>";
  // echo "$elzero";
  // echo '<br>';
  // echo nl2br(${$name});
  // echo '<br>';
  // echo <<< "code"//heredoc double quotes or without quotes 
  // ${$name}
  // code;
  /////////////////////////////
  //التكليف 03
  // $a = 200;
  // $b = &$a;
  // $a = 100;
  // echo $b; // 100
  ////////////////////////////
  //التكليف 04
  // echo $_SERVER['DOCUMENT_ROOT'];
  // echo "<br>";
  // echo $_SERVER['SERVER_NAME'];
  // echo "<br>";
  // echo $_SERVER['SystemRoot'];
  // echo "<br>";
  //another solution
  // echo $_SERVER['OPENSSL_CONF'];
  //   $arr=['DOCUMENT_ROOT',"SERVER_NAME","SystemRoot","OPENSSL_CONF"];
  // foreach ($arr as $value) {
  //     echo $_SERVER[$value];
  //     echo "<br>";
  // }
  /////////////////////////////
  //التكليف 05
  /**
   * break
   * clone 
   * function
   * include
   * isset()
   * var
   * echo 
   * print
   * array()
   * unset()
   */
  //////////////////////////////
  //التكليف 06
  // echo __LINE__;
  // echo "<br>";
  // echo __FILE__;
  // echo "<br>";
  // echo __DIR__;
//?##################################################################################################################################

 /*
 ===================================================================================
 =============================== Arithmetic Operators ==============================
 ===================================================================================
 */
  /*
      Operators
      - Used To Perform Operations On Values.

      Arithmetic Operators
      - Used To Do Arithmetical Operations &#038; Conversion

      - $a [+]  $b => Addition
      - $a [-]  $b => Subtraction
      - $a [*]  $b => Multiplication
      - $a [/]  $b => Division
      - $a [%]  $b => Modulus
      - $a [**] $b => Exponentiation
      - +$a        => Identity
      - -$a        => Negation
    */
  ///////////////////////
  // echo 21 % 10; // Remove 1 To Become 20
  // echo '<br>';
  // echo 23 % 10; // Remove 3 To Become 20
  // echo '<br>';
  // echo 29 % 10; // Remove 9 To Become 20
  // echo '<br>';
  // echo 30 % 10;
  // echo '<br>';
  // ///////////////////////
  // echo 2 ** 4;
  // echo '<br>';
  // echo 2 * 2 * 2 * 2;
  // echo '<br>';
  // echo 3 ** 5;
  // echo '<br>';
  // echo 3 * 3 * 3 * 3 * 3;
  // echo '<br>';
  // //////////////////////
  // echo "100";
  // echo '<br>';
  // echo gettype("100");
  // echo '<br>';
  // echo +"100";
  // echo '<br>';
  // echo gettype(+"100");
  // echo '<br>';
  // //////////////////////
  // echo "-100";
  // echo '<br>';
  // echo gettype("-100");
  // echo '<br>';
  // echo -"-100";
  // echo '<br>';
  // echo gettype(-"-100");
  /////////////////////
//?##################################################################################################################################

  /*
  ===================================================================================
  ============================== Assignment Operators  ==============================
  ===================================================================================
  */
    /*
    Operators
    - Used To Perform Operations On Values.

    Assignment Operators
    - Used To Write Value To Another

    - $a [+=]  $b => Addition
    - $a [-=]  $b => Subtraction
    - $a [*=]  $b => Multiplication
    - $a [/=]  $b => Division
    - $a [%=]  $b => Modulus
    - $a [**=] $b => Exponentiation
  */
  // $a=10;
  // $a +=10;//a=a+10
  // echo $a;
  // echo "<br>";
  // ///////////////
  // $b=20;
  // $b -=5;// b=b-5
  // echo $b;
  // //////////////
  // echo "<br>";
  // $c=4;
  // $c **=2;
  // echo $c;
  //////////////
//?##################################################################################################################################

    /*
  ===================================================================================
  ============================= Comparison Operators 1 ==============================
  ===================================================================================
    */
      /*
    Operators
    - Used To Perform Operations On Values.

    Comparison Operators
    - Used To Compare Two Values

    - Part 1
    - ==    => Equal
    - !=    => Not Equal
    - <>    => Not Equal
    - ===   => Identical
    - !==   => Not Identical
  */
    //Test Equal
    // var_dump(100 == 100);
    // echo "<br>";
    // var_dump(100.0 == 100);
    // echo "<br>";
    // var_dump("100" == 100);
    // echo "<br>";
    // var_dump(100 != 100);
    // echo "<br>";
    // var_dump(100 <> 100);// not equal
    ////////////////////////
    // var_dump(100 === 100);
    // echo "<br>";
    // var_dump(100.0 === 100);
    // echo "<br>";
    // var_dump("100" === 100);
    // echo "<br>";
    // var_dump(100 !== "100");
    // echo "<br>";
    // var_dump(100.0 !== 100);// not equal
//?##################################################################################################################################

  /*
  ===================================================================================
  ============================= Comparison Operators 2 ==============================
  ===================================================================================
  */
  /*
    Operators
    - Used To Perform Operations On Values.

    Comparison Operators
    - Used To Compare Two Values

    - Part 2
    - >     => Larger Than
    - >=    => Larger Than Or Equal
    - <     => Smaller Than
    - <=    => Smaller Than Or Equal
    - <=>   => Spaceship [Less Than, Equal Or Greater]

    Search
    - How Does PHP Compare Strings With Comparison Operators
   */
    // var_dump(100>50);
    // echo "<br>";
    // var_dump(100>100);
    // echo "<br>";
    // var_dump(100>=100);
    // echo "<br>";
    // var_dump(100>=110);
    // echo "<br>";
    // var_dump(100<50);
    // echo "<br>";
    // var_dump(100<=50);
    // echo "<br>";
    // var_dump(100 <=> 200);//-1 less than
    // echo "<br>";
    // var_dump(100 <=> 100);//0 Equal
    // echo "<br>";
    // var_dump(200 <=> 100);//1 Greater Than
//?##################################################################################################################################

  /*
  ===================================================================================
  ======================= Increment And Decrement Operators =========================
  ===================================================================================
  */
    // $likes = 0;
    // ++$likes;
    // $likes++;
    // $likes++;
    // $likes--;
    // echo $likes; //2 
    // //////////////////
    // echo "<br>";

    // $a=0;

    // echo $a++;//0
    // echo "<br>";
    // echo $a;//1
    // echo "<br>";

    // $b=0;

    // echo ++$b;//1
    // echo "<br>";
    // echo $b;//1
    // echo "<br>";
//?##################################################################################################################################

  /*
  ===================================================================================
  ============================= Increment And Decrement Operators ==============================
  ===================================================================================
  */
    /*
    Operators
    - Used To Perform Operations On Values.

    Logical Operators
    - Compare Conditions

    and => And => Two Are True
    &&  => And => Two Are True ["&&" Has A Greater Precedence Than "and"]
    or  => Or  => One Or Both Is True
    ||  => Or  => One Or Both Is True ["||" Has A Greater Precedence Than "or"]
    xor => Xor => One Is True But Not Both
    !   => Not => Not True
    */
    // var_dump(100 > 50 and 100 > 80 and 100 > 90); // True
    // echo '<br>';
    // var_dump(100 > 50 && 100 > 80 && 100 > 100); // False
    // echo '<br>';
    // var_dump(100 > 50 or 100 > 110 or 100 > 100); // True
    // echo '<br>';
    // var_dump(100 > 50 xor 100 > 80);
//?##################################################################################################################################

  /*
  ===================================================================================
  =============================== String Operators ==================================
  ===================================================================================
    */
    // define ("Elzero","1");
    //   $a="adham";
    //   $b="Ashraf";
    //   $c="Elganzoury";

    //   echo "$a $b $c";
    //   echo "<br>";
    //   echo "{$a} {$b} {$c}";
    //   echo "<br>";
    //   echo $a . " " . $b ." ". $c;
    //   echo "<br>";
    //   echo "{$a} {$b} {$c} " .Elzero ." ". testing();//constant work only with this way
    //   echo "<br>";
    //   function testing () {
    //     return 1;
    //   }

    //   $x = "Elzero";
    //   $x.=" Web"; //$x=$x . "web"
    //   $x.=" School";//$x=$x . "School"
    //   echo $x;
//?##################################################################################################################################

  /*
  ===================================================================================
  =============================== Array Operators ==================================
  ===================================================================================
    */
    /*
      Operators
      - Used To Perform Operations On Values.

      Array Operators
      - Deal With Arrays

      +     => Union
      ==    => Equal => Same Key And Value
      !=    => Not Equal
      <>    => Not Equal
      ===   => Identical => Same Key And Value, Same Order, Same Type
      !==   => Not Identical
     */
      // $arr1=[1 =>"A" , 2 => "B"];
      // $arr2=[3 =>"C" , 4 => "D"];
      // $arr3=$arr1+$arr2;
      // echo "<pre>";
      // print_r($arr1+$arr2);
      // print_r($arr3);
      // echo "</pre>";

      // $arr4=[1 =>"10", 2 =>"20"];
      // $arr5=[2 =>20, 1 =>10];
      //don't care about data type 
      // var_dump($arr4 == $arr5);// only same key same value 
      // echo "<br>";
      // var_dump($arr4 != $arr5);// false
      // echo "<br>";
      // var_dump($arr4 <> $arr5);// false
      // echo "<br>";

      // $arr6=[1 =>"100" , 2=>"200"];
      // $arr7=[2 =>100 , 1=>200];
      // $arr7=[1 =>"100" , 2=>"200"];

      // var_dump($arr6 === $arr7);//must be same order,same key ,same value ,same datatype
//?##################################################################################################################################

    /*
  ===================================================================================
  ============================ Error Control Operator ===============================
  ===================================================================================
    */
      /*
        Operators
        - Used To Perform Operations On Values.

        Error Control Operator
        - Control The Errors

        @
        - Variable
        - File
        - Include
      */

      //variable
      // $a=10;
      // $b=@$a or die("variable not found ");

      // echo "Test $b";
      // echo "<br>"; 

      // //file
      // $f=@file("adham.txt") or die("FIle Not Found");
      // print_r($f);
      // echo "<pre>";
      // print_r($f);
      // echo "</pre>";
      // echo "<br>"; 

      // //include
      // (@include ("test.php")) or die("File Not Found ");//don't forget ()
//?##################################################################################################################################

      /*
  ===================================================================================
  ============================== Operator Precedence ================================
  ===================================================================================
    */
  /*
    Operators
    - Used To Perform Operations On Values.
    Operator Precedence
    - "||" Has A Greater Precedence Than "or"
    - "&#038;&#038;" Has A Greater Precedence Than "and"
  */
  // echo 2 + 4 * 5;//22
  // echo "<br>";
  // echo ( 2 + 4 ) * 5; //30
  // echo "<br>";
  // echo 10 || false || "" || [] || ""; // true  => 1 
  // echo "<br>";
  // echo true; //1
  // echo "<br>";
  // var_dump(10 || false || "" || [] || ""); // true  => 1 
  // echo "<br>";
  // echo 10 || false;
  // echo "<br>";

  //  $a=10 || false; // $a= (10 || false) => $a = 1 
  //  echo $a;//1

  // echo "<br>";
  // $b = 10 or false; // ($b=10) or false

  // echo $b;
#**#################################################################################################################################
      /*
  ===================================================================================
  =================== تكليفات PHP Bootcamp من الدرس 20 إلى 29 =====================
  ===================================================================================
    */

    // تكليف 01 
    // echo 10 * 20 + 15 % 3 + 190 + 10 - 400; // 0
    // echo "<hr>";
    // ///////////////////////////////////
    // // تكليف 02
    //  $a ="10";
    //  echo +$a;
    //  echo "<br>";
    //  echo gettype(+$a);
    //  echo "<br>";

    //  echo (int)$a;
    //  echo "<br>";
    //  echo gettype((int)$a);
    //  echo "<br>";

    //  echo 0+$a;
    //  echo "<br>";
    //  echo gettype(0+$a);
    //  echo "<br>";

    //  echo false+$a;
    //  echo "<br>";
    //  echo gettype(false+$a);
    //  echo "<br>";
    //  echo null + $a;
    //  echo "<br>";
    //  echo gettype(null + $a);
    //  echo "<br>";
    //  echo "<hr>";
     ///////////////////////////////////
    //تكليف 03
    //  $a = 10;
    //  $b = 20;
    //  echo $a <=> $b;
    //  echo "<br>";
    //  echo $a - $b + --$a;
    //  echo "<hr>";
     ///////////////////////////////////
     // 04 تكليف 
    //  $a = 10;
    //  $b = 20;
    //  $c = 15;
     
    //  var_dump($a < $b); // True
    //  echo "<br>";
    //  var_dump($c > $a); // True
    //  echo "<br>";
    //  var_dump($a != $b); // True
    //  echo "<br>";
    //  var_dump($a <> $b); // True
    //  echo "<br>";
    //  var_dump($a <= $c); // True
    //  echo "<br>";
    //  var_dump($a != $c); // True
    //  echo "<br>";
    //  var_dump(gettype($a) == gettype($b)); // True
    //  echo "<br>";
    //  var_dump(gettype($a) === gettype($b)); // True
    //  echo "<br>";
    //  var_dump(gettype((float) $a) <> gettype($b)); // True
    //  echo "<hr>";
    ///////////////////////////////////
    //تكليف 05
    //  $points = 10;

    //  $points++;
    //  $points++;
    //  $points++;

    //  echo $points; // 13

    //  echo "<br>";

    //  $points--;
    //  $points--;
    //  $points--;
    //  $points--;
    //  $points--;
    //  echo $points; // 8;
    ///////////////////////////////////
    //التكليف 06
    // $a = "Elzero";
    // $b = "Web";
    // $c = "School";

    // // Method One
    //    $d = "$a $b $c";

    // // Method Two
    //    $d = $a." ".$b." ".$c;

    // // Method Three
    //  $d =$a ;
    //  $d .=" ".$b ;
    //  $d .= " ".$c ;

    // // Method Four
    //    $d = "{$a} {$b} {$c}";

    //    echo $d; // Elzero Web School
    //    echo "<hr>";
    ///////////////////////////////////
    //التكليف 07
    // $a = 10;
    // $b = 20;
    // echo (($a + $b) * ($a + $b) + $a * $a) * $a; // 10000
    // echo "<hr>";
    ///////////////////////////////////
    //التكليف 08
    // Code 1
    //$a = @$b or die("Custom Error");

    // Code 2
    //$f = @file("Not_A_File") or die("Custom Error");
    // Code 3
    //@(include("Not_A_File")) or die("Custom Error");
    ///////////////////////////////////
//?##################################################################################################################################

   /*
  ===================================================================================
  ============================ If, Elseif, Else Basics ==============================
  ===================================================================================
    */
      
  /*
    Control Structure
    - If, Elseif, Else <= Basics

    Syntax
    if (Condition) {
      // If Condition Is True <= Run Me
    } else {
      // If Condition Is False <= Run Me
    }
  */
    // if(10 >10 ) {
    //     echo "First condition ";
    //   } elseif(10>10) {
    //     echo "Second Condition";
    //   }else {
    //     echo "NO";
    //   }
//?##################################################################################################################################

   /*
  ===================================================================================
  ====================== If, Elseif, Else Real Life Examples ========================
  ===================================================================================
    */
      /*
    Control Structure
    - If, Elseif, Else <= Real Life Examples

    3% To 30%
        */
        // $page="About";
        // //if
        //   if($page == "About") {
        //     echo "This Is The Page";
        //   }
        //   echo "<br>";
        // // IF , Else 
        // $title ="Home";
        // if($title == "") {
        // echo "Unknown Page";
        // } else {
        //  echo $title;
        // }
        // echo '<br>';
        // // If, Elseif, Else
        // $lang="AAIE";
        // if ($lang == "Arabic") {

        //   echo 'مرحبا';
      
        // } elseif ($lang == "English") {
      
        //   echo 'Hello';
      
        // } elseif ($lang == "Spanish") {
      
        //   echo 'Hola';
      
        // } else {
      
        //   echo 'Unknown Language';
      
        // }
//?##################################################################################################################################

   /*
  ===================================================================================
  ====================== If, Elseif, Else Advanced Practice =========================
  ===================================================================================
    */

  /*
    Control Structure
    - If, Elseif, Else <= Advanced Practice

    30% To 60%
  */

  // if ($_SERVER["REQUEST_METHOD"] === "POST") {

  //   if ($_POST['lang'] == 'ar') {

  //     header("Location: ar.php");

  //     exit();//terminate the current script

  //   } elseif ($_POST['lang'] == 'en') {

  //     header("Location: en.php");

  //     exit();

  //   }

  // }
  //close  => ?>

    <!-- <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
  </head>
  <body>
    <form action="" method="POST">
      <input type="text" name="username">
      <select name="lang">
        <option value="ar">Arabic</option>
        <option value="en">English</option>
        <option value="es">Spanish</option>
      </select>
      <input type="submit" value="Go">
    </form>
  </body>
  </html> -->
    <?php
//?##################################################################################################################################

   /*
  ===================================================================================
  ======================= If, Elseif, Else Alternate Syntax =========================
  ===================================================================================
    */ 
    //best practice 
      // if(10 >5) {
      //   echo "Good";
      // }else {
      //   echo "Bad";
      // }
    ///////////////////
    // echo "<br>";
    
    // if (10 > 10) echo "Good";
    // else echo "Bad";
    /////////////////////
    // echo "<br>";

    // if (10 > 10)
    //   echo "Good";
    // else 
    //   echo "Bad";
    /////////////////////
    // echo "<br>";

    // if (10 > 10) echo "Good"; else echo "Bad";
    ?>
    <!-- //////////////////////////////////////  -->
    <!-- <?php

        if(10 == 5) {

     ?> -->
    <!-- <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
    </head>
    <body>
      Hello Page
    </body>
    </html> -->
    <!-- <?php  } ?> -->
    <!-- Another way using : and endif  -->
    <!-- <?php if(10 > 5) : ?> -->
    <!-- <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
    Hello Page
    </body>
    </html>
    <?php  endif; ?>  -->
    <?php
        // echo "<br>";
        // echo "<br>";
        // if ( 10 > 10 ) :
        //   echo "First";
        // elseif( 10 > 5 ) :
        //   echo "Second";
        // else :
        //   echo "Last";
        // endif;
//?##################################################################################################################################

   /*
  ===================================================================================
  ======================= If, Elseif, Else Alternate Syntax =========================
  ===================================================================================
    */ 
  /*
    Control Structure
    - Nested If Condition And Training
  */
  // $name = "Osama";
  // $is_student = true;
  // $is_orphan = true;
  // $country = "Egypt";
  // $country_discount = 50;
  // $price = 100;
  // $student_discount = 10;
  // $orphan_discount = 15;

  // if ($country == "Egypt") {

  //   if ($is_student == true) {

  //     if ($is_orphan == true) {

  //       echo "Hello $name";
  //       echo "<br>";
  //       echo "Country Discount $country_discount";
  //       echo "<br>";
  //       echo "Student Discount $student_discount";
  //       echo "<br>";
  //       echo "Orphan Discount $orphan_discount";
  //       echo "<br>";
  //       echo "The Final Price Is " . $price - $country_discount - $student_discount - $orphan_discount;

  //     } else {

  //       echo "Hello $name";
  //       echo "<br>";
  //       echo "Country Discount $country_discount";
  //       echo "<br>";
  //       echo "Student Discount $student_discount";
  //       echo "<br>";
  //       echo "The Final Price Is " . $price - $country_discount - $student_discount;

  //     }

  //   } else {

  //     echo "Hello $name";
  //     echo "<br>";
  //     echo "Country Discount $country_discount";
  //     echo "<br>";
  //     echo "The Final Price Is " . $price - $country_discount;

  //   }

  // } else {

  //   echo "Hello $name";
  //   echo "<br>";
  //   echo "No Discount";
  //   echo "<br>";
  //   echo "The Final Price Is $price";

  // }
//?##################################################################################################################################

   /*
  ===================================================================================
  ======================= If, Elseif, Else Alternate Syntax =========================
  ===================================================================================
    */
      /*
    Control Structure
    - Ternary Operator => Short If
  */

  // $a = 10;
  // Condition ? True : False; 

  //    echo  $a > 8 ? "Good":"Bad";

  //    echo "<br>";

  //    echo "I love PHP Because Its A ";
  //    if ($a > 8) {

  //     echo "Good ";
  
  //   } else {
  
  //     echo "Bad";
  //   }
   
  //    echo "language ";
  //////////////////////////////
  //       echo "<br>";
  //       echo "I Love PHP Because Its A ". (  TRUE ? "Good ":"Bad" )."language";
  //       $result= (TRUE ? "Good ":"Bad");
  // //////////////////////////////
  //       echo "<br>";
  //       echo "I Love PHP Because Its A ". $result."language";
//?##################################################################################################################################

    /**
     * Control Structure
     * switch
     */
    // Syntax
    // switch (expression) {
    //   Case 1:
         // Code Block 1
    //     break;
    //   Case 2:
        // Code Block 2
    //     break;
    //   Case 3:
         // Code Block 3
    //     break;
    //   Default:
         // Default Code Block
    // }

  //   $day = "Thu";

  // switch($day) {

  //   case "Sat":
  //     echo "Hello Today Is $day We Are Open From 10:16";
  //     break;

  //   case "Sun":
  //     echo "Hello Today Is $day We Are Open From 12:18";
  //     break;

  //   case "Mon":
  //   case "Thu":
  //     echo "Hello Today Is $day We Are Open From 08:12";
  //     break;

  //   default:
  //     echo "Unknown Day";
  // }
#**#################################################################################################################################
   /*
  ===================================================================================
  =================== تكليفات PHP Bootcamp من الدرس 30 إلى 36 =====================
  ===================================================================================
    */
    //التكليف 01
    // $a = 100;
    // $b = 200;
    // $c = 100;
    // if( $b > $a && $a == $c && $a + $c == $b)
    //   echo "Yes";

    /*
      Check That:
      Variable "b" Larger Than Variable "a"
      Variable "a" Identical To Variable "c"
      Variable "a" Plus Variable "c" Identical To Variable "b"
    */

    //التكليف 02
    // Test Case 1
    //   $a = 100;
    //   $b = 200;
    //   $c = 300;
    // A Is Not Larger Than B Or C
    // Test Case 2
    //    $a = 200;
    //    $b = 100;
    //    $c = 300;
    // A Is Larger Than B
    // Test Case 3
    //     $a = 200;
    //     $b = 200;
    //     $c = 100;

    // A Is Larger Than c
    // if($a > $b) {
    //   echo "A Is Larger Than B";
    // }
    // elseif($a > $c) {
    //   echo "A is Larger Than C";
    // }
    // elseif(a<=($b || $c) ) {
    //   echo "A Is Not Larger Than B Or C";
    // }
    //التكليف 3 
    ?>
    <!-- <form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
    </form> -->
    <?php
          // $admins = ["Osama", "Ahmed", "Sayed"];
        //https://stackoverflow.com/questions/10943060/isset-postsubmit-vs-serverrequest-method-post
          // if ($_SERVER['REQUEST_METHOD'] == "POST") {
          //   $username = $_POST['user'];
          //   echo "The Request Method Is Post And Username Is $username" . '<br>';
          //   if($admins[0]==$username || $admins[1]==$username || $admins[2]==$username)// you can use foreach 
          //   {
          //     print("This  Username $username Is Admin");
          //   }
          // }
    //التكليف 4
      // $a = 30;
      // $b = 20;
      // $c = 10;
      // echo (($a + $b === $c ? "A + B = C" : $a + $c === $b) ? "A + C = B" : $b + $c === $a) ? "B + C = A" : "The End";
      //  $result=(($a + $b === $c? "A + B = C"
      // :$a + $c === $b)? "A + C = B"
      // :$b + $c === $a)? "B + C = A"
      // : "The End";
      // echo $result;
    //التكليف 5
      // $name = "Adham";
      // $age = 20;
      // $country = "Italy";
      // if ($age > 18 && gettype($name) === "string" && $country === "Egypt") {
      //   echo "The Age Is Good To Go<br>";
      //   echo "The Name Is Good To Go<br>";
      //   echo "The Country Is Good To Go<br>";
      // }
    //التكليف 6 
      // $genre= "Hack And Slash";
      // switch($genre) {

      //   case "RPG":
      //     echo "I Recommend Ys Games";
      //     break;
      //   case "Hack And Slash":
      //     echo "I Recommend Castlevania Games";
      //     break;
      //   case "FPS":
      //     echo "I Recommend Uncharted Games";
      //     break;
      //   case "Platform":
      //   case "Puzzle":
      //       echo "I Recommend Megaman Games";
      //       break;
      //   default:
      //   echo "I Recommend Shadow Of Mordor And Shadow Of War";
    // التكليف 7
      // $num1 = 23;
      // $num2 = 5;
      // $op = "/";
      //    switch($op) {
      //   case "+":
      //     echo $num1+$num2;
      //     break;
      //   case "-":
      //     echo $num1-$num2;
      //     break;
      //   case "/":
      //     echo (int)($num1/$num2) ."<br>";
      //     echo $num1%$num2;
      //     break;
      //   case "*":
      //     echo $num1*$num2;
      //       break;
      //   default:
      //     echo "Unknown Operation";
    // التكليف 8 
      // $day = "Sun";
      //   if($day==("sat" || "Sun" || "Mon"))
      //       echo "We Are Open All The Day";
      //   elseif($day==("Tue" || "Wed"))
      //       echo "We Are Open From 08:12";
      //   elseif($day==("Thu" || "Fri"))
      //       echo "We Are Closed";
      //   else 
      //       echo "Unknown Day";
//?##################################################################################################################################

   /*
  ===================================================================================
  ======================= While Loop And The Concept Of Loop ========================
  ===================================================================================
    */
      /*
    Control Structure
    - Loop

    While
  */
  // echo "1<br>";
  // echo "2<br>";
  // echo "3<br>";
  // echo "4<br>";
  // echo "5<br>";

  // echo "1<br>2<br>3<br>4<br>5<br>";
  //  $i=1;
  //       while($i<=3) {
  //           echo "$i<br>";
  //           ++$i;
  //       }
  //       echo "<hr>";
  //  $a=1;
  //       while($a<=3) :
  //           echo "$a<br>";
  //           ++$a;
  //       endwhile;
//?##################################################################################################################################

  /*
  ===================================================================================
  ================================== Do While =======================================
  ===================================================================================
    */
     /*
    Control Structure
    - Loop
    Do, While
  */
  // $i = 4;

  // while ($i <= 3) {

  //   echo "$i<br>";

  //   $i++;

  // }

  // do {

  //   echo "$i<br>";

  //   $i++;

  // } while ($i <= 3);


  // $index = 0;

  // while ($index <= 100) {

  //   echo "$index<br>";

  //   $index += 5;

  // }
//?##################################################################################################################################

 /*
  ===================================================================================
  ================================== Loop – For =====================================
  ===================================================================================
    */
    

  /*
    Control Structure
    - Loop

    For
    - Expression One Run Once At The First Of The Loop
    - In The Begining Of Iteration Expression Two Is Checked [If True Continue || Break]
    - At The End Of Iteration Expression Three Are Executed
  */

  // $i = 1;

  // while ($i <= 3) {

  //   echo "$i<br>";

  //   $i++;

  // }

  // echo '##### <br>';

  // for ($i = 1; $i <= 3; $i++) {

  //   echo "$i<br>";

  // }

  // echo '##### <br>';

  // $index = 1;

  // for (;;) :

  //   if ($index == 4) {

  //     break;

  //   }

  //   echo "$index<br>";

  //   $index++;

  // endfor;
//?##################################################################################################################################

   /*
  ===================================================================================
  ================================ Loop – Foreach ===================================
  ===================================================================================
    */ 
      /*
    Control Structure
    - Loop

    Foreach
  */ 
  // $countries = ["EG", "SA", "QA", "SY"];
  // echo '<pre>';
  // print_r($countries);
  // echo '</pre>';

  // $countries_with_discount = ["EG" => 50, "SA" => 30, "QA" => 50, "SY" => 70];
  
  // echo '<pre>';
  // print_r($countries_with_discount);
  // echo '</pre>';
  //   foreach($countries as $country){
  //     echo $country."<br>";
  //   }
  //   foreach($countries_with_discount as $country => $discount){
  //     echo "Country Name Is $country And Discount Is $discount <br>";
  //   }
  //   echo "<br>";
  //     foreach($countries_with_discount as $country => $discount):
  //     echo "Country Name Is $country And Discount Is $discount <br>";
  //   endforeach;
//?##################################################################################################################################

   /*
  ===================================================================================
  =============================== Break, Continue ===================================
  ===================================================================================
    */ 
      /*
    Control Structure
    - Loop

    Break, Continue
    - Break Ends Execution Of (For, Foreach, While, Do-while or Switch)
    - Skip Current Iteration
  */
  // foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {

  //   if ($country == "USA") {

  //     break;

  //   }
  //   echo $country. "<br>";
  // }
  // echo "<hr>";
  ###################################################
  // foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {

  //   if ($country == "USA") {

  //     continue;

  //   }

  //   echo $country . "<br>";

  // }
//?##################################################################################################################################

   /*
  ===================================================================================
  ============================== Include, Require ===================================
  ===================================================================================
    */ 
      /*
    Control Structure
    - Including Files

    Include
    Require
      */
      // include_once("test.php"); // $a = 10;
      // the reset of code  will work if he find or not find the file  => test.php
      // echo $a . '<br>';
    
      // $a = 20;
    
      // require ("test.php"); // $a = 10;
      // the reset of code  will work only when he find file  => test.php 
    
      // echo $a . '<br>';
    
      // echo "Continue";



//?##################################################################################################################################

 /*
  ===================================================================================
  ================== تكليفات PHP Bootcamp من الدرس 37 إلى 42 ======================
  ===================================================================================
    */ 
    //تكليف 01
      // $index = 10;
      // while($index>=1)
      // {
      //   echo "$index <br>";
      //   $index--;
      // }
    //التكليف 02
      // $index = 0;
      // while($index<20)
      // {
      //   $index=$index+2;
      //   if($index==0)
      //   {
      //     continue;
      //   }
      //   echo "$index"."<br>";
      // }
      // do {
      //   $index=$index+2;
      //   if($index==0)
      //   {
      //     continue;
      //   }
      //   echo "$index"."<br>";

      // }while($index<20);
      // for($index;$index<=20;$index+=2){
      //       if($index==0)
      //        {
      //          continue;
      //        }
      //        echo "$index"."<br>";
      // }

    //التكليف 3
    // $num = 2;
    // $num--;
    // while ($num < 520) {
    //   echo $num . "<br>";
    //   if ($num == 1) {
    //     $num = 4;
    //   } else {
    //     //4+3*2=10
    //     //10+4*2=18
    //     $num = ($num * 2) + 2;
    //   }


    // }

    // التكليف 4 
    // $start = 10;
    // $end = 0;
    // $stop = 3;
    //   for(;$start>=$stop;$start--){
    //       if($start <10)
    //       echo $end;
    //       echo $start;
    //       echo "<br>";
    //   }
    // التكليف 5
        // $start = 0;
        // $mix = [1, 2, 3, "A", "B", "C", 4];
        // for(;$start<7;$start++)
        // {
        //   if($mix[$start]==1)
        //     continue;
        //     if(is_numeric($mix[$start]))
        //     {
        //       echo $mix[$start]."<br>";
        //     }

        // }
    // التكليف 6
    // $money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
    //       foreach($money as $name => $price)
    //       {
    //        echo "The Name Is $name And I Need $price Pound From Him";
    //        echo "<br>";
    //       }
    // التكليف 7
      // $mix = [1, 2, "A", "B", "C", 3, 4];
      // $numbers=0;
      // $letters=0;
      // foreach($mix as $all){
      //       if(is_numeric($all)){
      //           $numbers++;
      //           echo $all;
      //           echo "<br>";
      //       }
      //       else {
      //         $letters++;
      //       }
      // }
      // echo "Number of Letters Ignored : $letters <br>";
      // echo "Number of Numbers  is : $numbers";
    //التكليف 8
          // $nums = [1, 13, 12, 20, 51, 17, 30];
          // foreach($nums as $number)
          // {
          //   if($number%2==0)
          //   {
          //     echo $number/2;
          //     echo "<br>";
          //   }
          // }
    // التكليف 9
        // $help_num = 3;
        // $nums = [4, 5, 6, 1, 2, 3];
        // $names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
        // for ($help_num; $help_num < $nums[true]; $help_num++) {
        //   if ($names[$help_num] === 'Sayed' || $names[$help_num] === 'Osama') {
        //     echo $names[$help_num];
        //     echo '<br>';
        //   } else {
        //     continue;
        //   }
        // }
    // التكليف 10
          // $help_num = 4;
          // $nums = [2, 4, 5, 6, 10];
          
          // ++$help_num;
          // foreach ($nums as $index) {
          //   echo "$index + " . $nums[--$help_num] . ' = ' . $index + $nums[$help_num];
          //   echo '<br>';
          // }
//?##################################################################################################################################

   /*
  ===================================================================================
  ==================== Function Introduction And DRY Concept ========================
  ===================================================================================
    */ 
      /*
      Dry Concept => mean don't repeat yourself
      Function
      - Introduction And DRY Concept
      - Parameter
      - Argument
    */
    // echo "Hello Mr Osama<br>";
    // echo "Hello Mr Ahmed<br>";
    // echo "Hello Mr Sayed<br>";
    // function say_hello_to($someone) {
    //   echo "Hello Mr $someone<br>";
    // }
  
    // say_hello_to("Osama");
    // say_hello_to("Ahmed");
    // say_hello_to("Sayed");
//?##################################################################################################################################

   /*
  ===================================================================================
  =============== Advanced Examples With Parameters And Arguments ===================
  ===================================================================================
    */ 
      /*
        Function
        - Advanced Examples With Parameters And Arguments
        - Real Life Example
       */
      // function say_hello_to($one, $two) {
      //   echo "Hello $one $two<br>";
      // }
      // say_hello_to("Osama", "Ahmed");
    
      // function deep_freezer($item) {
      //   if ($item === "Water") {
      //     echo "Make Ice <br>";
      //   } elseif ($item === "Coca Cola") {
      //     echo "Make It Cold <br>";
      //   } elseif ($item === "Fruits") {
      //     echo "Make It Fresh <br>";
      //   } else {
      //     echo "Unknown Item";
      //     echo "<br>";
      //   }
      // }
      // deep_freezer("Water");
      // deep_freezer("CocaCola");
      // deep_freezer("Fruits");
      // deep_freezer("Tv Remote");
//?##################################################################################################################################

   /*
  ===================================================================================
  ============================ Function Return vs Echo ==============================
  ===================================================================================
    */ 
        /*
    Function
    - Optional Return &#038; Null
    - End After Return
  */

  // $prizes = ["PC", "Playstation", "XBOX", "Apple TV", "Laptop", "iPad", "iPhone"];

  // function get_number($num_one, $num_two) {
  //   return $num_one + $num_two;
  //   echo "Will Not Echo Anything";
  // }

  // get_number(2, 1); // 3
  // echo $prizes[3]; // "Apple TV"
  // $prize_number = get_number(2, 1);
  // var_dump($prize_number);
  // echo $prizes[$prize_number];

  // $prize_number = get_number(2, 1);
  // var_dump($prize_number);

  // echo $prizes[get_number(2, 1)];
//?##################################################################################################################################

   /*
  ===================================================================================
  ======================= Function Default Parameter Value ==========================
  ===================================================================================
    */ 
      /*
    Function
    - Default Parameter Value
    --- Using
    --- Test Data
    --- Skip Arguments
  */
  // notice that it will give your error if you make the address at the first and you don't pass paramter for it 
  // function get_data($country = "Private Country", $name = "Private", $age = "Private", $address = "") {
  //        if ($address === "") {
  //         $address = "Private Address";
  //         }
  //        $line_one = "Your Country Is $country And Your Name Is $name <br>";
  //        $line_two = "Your Age Is $age And You Live In $address";
  //        return $line_one . $line_two;
  // }
  // echo get_data(address: "Cairo", country:"Egypt");   
//?##################################################################################################################################

   /*
  ===================================================================================
  ======================= Function Variable Arguments List ==========================
  ===================================================================================
    */ 
      /*
    Function
    - Variable Arguments List
    --- func_num_args()
    --- func_get_arg(index)
    --- func_get_args()

    Spread Syntax In JS
  */
  //$nums is array we can loop and get it's values;
  // function calculate(...$nums) {
  //  echo "Number Of Arguments : ".func_num_args();
  //  echo "<br>";
  //  echo "Argument Index Number 3 Is : ".func_get_arg(3);
  //  echo "<br>";
  //  echo "<pre>";
  //  print_r(func_get_args());
  //  echo "</pre>";
  //  $result=0;
  //  foreach(func_get_args() as $arg):
  //   $result+=$arg;
  //  endforeach;
  //   echo $result;
  // #################################
  // echo "Argument Index Number 3 Is : ".$nums[3];
  //   echo "<pre>";
  //   print_r($nums);
  //   echo "</pre>";
  //  $result=0;
  //  foreach($nums as $num):
  //   $result+=$num;
  //  endforeach;
  //   echo $result;
  // }
  //      calculate(10,20,50,30,40);
//?##################################################################################################################################

   /*
  ===================================================================================
  ================== Function Training And Unpacking Arguments ======================
  ===================================================================================
    */ 
      /*
    Function
    - Function Advanced Training
    -- Unpacking In Arguments

    Search
    - PHP Variadic Functions
    - Splat Operator *******
    The splat operator allows us to send the array to the function and it will be unpacked into separate variables. 
    We can call the function using the splat operator like this.
    echo addNumbers(... $numbersArray);
     *******
  */
    //  $group_of_skills = ["HTML", "CSS", "JS", "PHP"];
    // function get_data($name, $country="private",...$skills) {
    //     ECHO "Hello $name Your Country is $country <br>" ;
    //     foreach($skills as $skill):
    //         echo "-- $skill <br>";
    //     endforeach;
    // }
    // get_data("Adham","Egypt",...$group_of_skills);
//?##################################################################################################################################

   /*
  ===================================================================================
  ==================== Variable Function And Function Exists ========================
  ===================================================================================
    */ 
      /*
    Function
    - Variable Function
    --- PHP Allow To Use Variable Like Function
    --- When You Append Parentheses () To Variable PHP Will Look For Function With That Name
    - Function Exists
    --- function_exists("Func Name")
      */
      // function one() {
      //   return "One From Function";
      // }
      //echo one();
      // $fun1="one";
      // echo $fun1();
      // function say_hello_to($someone) {
      //   return "Hello $someone";
      // }
      // echo "<br>";
      // $fun2="say_hello_to";
      // echo $fun2("Adham");
      //  function testing() {
      //   echo "This is Testing Function";
      //  }
      //  if(function_exists("testing")) {
      //   echo testing();
      //  }
      //  else {
      //   echo "Function not found";
      //  }
      // echo strlen("AAIE");//4
      //  $fun3="strlen";
      //  echo $fun3("Adham");//5
//?##################################################################################################################################

   /*
  ===================================================================================
  ======================== Passing Arguments By Reference ===========================
  ===================================================================================
    */ 
      /*
    Function
    - Passing Arguments by Reference
    --- By Default, Function Arguments Are Passed By Value
    --- If The Value Of The Argument Inside The Function Changed It Will Not Change Outside
    --- To Change It Outside Pass The Argument By Reference

    - Return Type Declarations

    Search
    - PHP Strict Mode
  */
  // function add_five(&$number) {
  //   $number+=5;
  //   return $number;
  // }
  // $n=15;
  //   echo add_five($n);
  //   echo "<br>";

  //   echo $n;

  //   echo "<br>";

    // function calculate1($n1,$n2) : string  {
    //   return $n1+$n2;
    // }
    // echo calculate1(10.5,9.5);

  //   echo "<br>";
    
  //   echo gettype(calculate(10.5,9.5));
//?##################################################################################################################################


   /*
  ===================================================================================
  =============================== Anonymous Function ===============================
  ===================================================================================
    */ 
      /*
    Function
    - Anonymous Function
    --- When We Create A Function We Give It A Name So We Can Call It Later With That Name
    --- Sometimes We Need To Create A Function For Specific Task <= This Is Not Against DRY

    - Variable Inherit From Parent Scope
    - Variable Inherit By Reference From Parent Scope
    - Anonymous Function Can Be Passed To A Function
    - Anonymous Function Can Be Return From A Function

    Search
    - Closure
  */

  // Normal Function With Parameter
  // $say_hello = function() {
  //   return "Hello";
  // };
  // echo $say_hello();
  // echo '<br>#########<br>';
  
  // // Anonymous Function In Variable

  //   $say_hello = function() {
  //     return "Hello";
  //   };
  //   echo $say_hello();
  //   echo '<br>#########<br>';

  // // Anonymous Function With Parameter In Variable
  // $say_hola = function($someone) {
  //   return "Hello $someone";
  // };
  // echo $say_hola("Adham");
  // echo '<br>#########<br>';
  // Inherit Variable From Parent Scope => we can use global keyword or we can use()
  //       $msg = "Hi";
  //       $say_hi = function($someone) use ($msg) {
  //         return "$msg $someone";
  //       };
  //       echo $say_hi("Osama");
  //       echo '<br>#########<br>';
  // // Pass Anonymous Function To Function => array_map

  // $nums = [10, 20, 30, 40, 50];

  // function add_five($item) {
  //   return $item + 5;
  // }
  // $nums_after_adding_five = array_map("add_five", $nums);

  // echo '<pre>';
  // print_r($nums_after_adding_five);
  // echo '</pre>';

  // $nums_after_adding_ten = array_map(function($item) { return $item + 10; }, $nums);
  // echo '<pre>';
  // print_r($nums_after_adding_ten);
  // echo '</pre>';
//?##################################################################################################################################

   /*
  ===================================================================================
  ================================= Arrow Function ==================================
  ===================================================================================
    */ 
     /*
    Function
    - Arrow Function
    --- Short Syntax For Anonymous Function
    --- Automatic Use Variables From Parent Scope

    - Syntax
    --- Function Replaces With fn
    --- No Need For Curly Braces
    --- Return Is Omitted
  */
    // Arrow Function In Variable
    // $say_hello = fn() => "Hello";

    // echo $say_hello();
  
    // echo '<br>#########<br>';
  
    // // Arrow Function With Parameter In Variable
  
    // $say_hola = fn($someone) => "Hola $someone";
  
    // echo $say_hola("Osama");
  
    // echo '<br>#########<br>';
  
    // // Arrow Inherit Variable From Parent Scope Is Automatic
  
    // $msg = "Hi";
  
    // $say_hi = fn($someone) => "$msg $someone";
  
    // echo $say_hi("Osama");
  
    // echo '<br>#########<br>';
  
    // // Pass Arrow Function To Function => array_map
  
    // $nums = [10, 20, 30, 40, 50];
  
    // $nums_after_adding_ten = array_map(fn($item) => $item + 10, $nums);
    // echo '<pre>';
    // print_r($nums_after_adding_ten);
    // echo '</pre>';
#**#################################################################################################################################
   /*
  ===================================================================================
  ==================== تكليفات PHP Bootcamp من الدرس 43 إلى 52 ====================
  ===================================================================================
    */ 
    //0التكليف 1 
    // function greeting($name,$type="") {
    //   if($type=="Female")
    //     print "Hello Miss $name <br> ";
    //   elseif($type=="Male") 
    //     print "Hello Mr $name <br>" ;
    //   else 
    //     print "Hello $name <br>";
    // }
    //     echo greeting("Osama", "Male"); // Hello Mr Osama
    //     echo greeting("Eman", "Female"); // Hello Miss Eman
    //     echo greeting("Sameh"); // Hello Sameh
    #############################
    //التكليف 02
  //   function get_arguments(...$args){
  //     $number_of_args = func_num_args();
  //     $number_of_args = sizeof($args);
  //     $all = implode(" ",func_get_args());
  //     $all = implode(" ",$args);
  //     return $all;
  // }
  // echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
  ///////////////////////////////////////
      //  function get_arguments($words) {
      //   $all="";
      //   // foreach ($words as $word) {
      //   //   $all=$all ." ".$word;
      //   // }
      //   // return $all;
      //   echo "<br>";
      //   //other way
      //   foreach (func_get_args() as $word) {
      //     $all=$all ." ".$word;
      //   }
      //   return $all;
      // }
        // echo get_arguments("Hello", "Elzero", "Web", "School");  
     #############################
  //التكليف 03
      // function sum_all(...$nums) {
      //   $sum=0;
      //   foreach($nums as $number) {
      //   if($number == 5)
      //   $number=0;
      //   if($number== 10)
      //   $number=20;
      //   $sum+=$number;
      //   }
      //   print_r($nums);
      //   return $sum;
       
      // }
      // echo sum_all(10, 12, 5, 6, 6, 10); // 64
      // echo "<br>";
      // echo sum_all(5, 10, 5, 10); // 40
  // 0التكليف 4
    //  function multiply(...$numbers) {
    //   $multi=1;
    //     foreach ($numbers as $number)
    //     {
    //       if(is_numeric($number))
    //       {
    //         if(!is_int($number))
    //         {
    //           $number=(int)$number;
    //         }
    //           $multi=$multi*$number;
    //       }
    //       else
    //       continue;
    //     }
    //     return $multi;

    //  }


    //     echo multiply(10, 20); // 200
    //     echo "<br>";
    //     echo multiply("A", 10, 30); // 300
    //     echo "<br>";
    //     echo multiply(100.5, 10, "B"); // 1000
    ####################################
    //التكليف 05
    // function check_status($a, $b, $c) {
      // Function Code Here
      // if(gettype($a)=="string"&& gettype($b)=="integer"){
        // if($c==false){
        // return "Hello $a, Your Age Is $b, You Are not Available For Hire<br>";
        // } else {
        // return "Hello $a, Your Age Is $b, You Are Available For Hire<br>";
        // }
        // }else if(gettype($a)=="integer"&& gettype($b)=="string"){
        // if($c==false){
        // return "Hello $b, Your Age Is $a, You Are not Available For Hire<br>";
        // } else {
        // return "Hello $b, Your Age Is $a, You Are Available For Hire<br>";
        // }
        // }else if(gettype($b)=="integer"&& gettype($c)=="string"){
        // if($a==false){
        // return "Hello $c, Your Age Is $b, You Are not Available For Hire<br>";
        // } else {
        // return "Hello $c, Your Age Is $b, You Are Available For Hire<br>";
        // }
        // } else {
        // if($a==false){
        // return "Hello $b, Your Age Is $c, You Are not Available For Hire<br>";
        // } else {
        // return "Hello $b, Your Age Is $c, You Are Available For Hire<br>";
        // }
        // }
        // }
    
          // Needed Output

          // echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
          // echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
          // echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
          // echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
        ##################################
        // التكليف 06
          // Write Function Content Here
          //   function calculate($number1,$number2,$operation=""){
          //     if($operation == "add" ||$operation == "a"||$operation == ""){
          //       return $number1+$number2;
          //     }
          //     elseif($operation == "subtract" ||$operation == "s"){
          //       return $number1-$number2;
          //     }
          //     elseif($operation == "multiply" ||$operation == "m"){
          //       return $number1*$number2;
          //     }
          //     else 
          //     return "operation not found";



          //   }
          // // Needed Output
          // echo calculate(10, 20); // 30
          // echo "<br>";
          // echo calculate(10, 20, "a"); // 30
          // echo "<br>";
          // echo calculate(10, 20, "s"); // -10
          // echo "<br>";
          // echo calculate(10, 20, "subtract"); // -10
          // echo "<br>";
          // echo calculate(10, 20, "multiply"); // 200
          // echo "<br>";
          // echo calculate(10, 20, "m"); // 200
        //التكليف 7
            // function calculate(int $num_one, int $num_two):float {
            //   $num_one=(double) $num_one;
            //   return $num_one + $num_two;
            // }

            // echo calculate(20, 10); // 30
            // echo "<br>";
            // echo gettype(calculate(20, 10)); // Double
        // التكليف 08 
        // $message = "Hello";
        // // Write Your Code Here
        // $$message = &$message;
        // echo "<br>";
        // echo $message;
        // $message = function($message){
        //     $$message = $message;
        //     return "$message";
        //     };
        //$message = "Hello";
        //$$message=&$message;
        //$$message=function($name) use($message){
        //    return "{$message} $name";
        //};
        // echo $Hello("Osama"); // Hello Osama
        ###########################################
        //التكليف 09
      // Write Function Content Here
      // Anonymous Function 
        // $greet = function($name){
        //   return " Hello $name";
        // };
        // Arrow Function
        // $greet = fn($name) => " Hello $name";
        // // Needed Output
        // echo $greet("Osama"); // Greetings
//?##################################################################################################################################

   /*
  ===================================================================================
  ============================= String Access And Update ============================
  ===================================================================================
    */ 
      /*
    String
    - Access Elements
    --- String Is Array Of Characters
    --- Access Elements By Index "Zero Based Indexing"
    --- Negative Index Are Allowed
    - Update Elements
    --- Update Current Elements
    --- Add New Elements

    Search
    - Single-Byte and Multi-Byte
  */
      // $str="Elzero";

      // echo "First Lettter is  $str[0] <br>";
      // echo "4th Lettter is  $str[3] <br>";
      // echo "Number of Letters: ".strlen($str). "<br>";//6
      // echo "Last Letter Is $str[-1] <br>";
      // echo "Last Letter Is {$str[strlen($str) - 1]}"."<br>";
      // echo $str . "<br>";
      // $str[0] = "A";//update
      // echo $str . "<br>";
      // $str[6] = "A";//add
      // echo $str . "<br>";
//?##################################################################################################################################

   /*
  ===================================================================================
  ====================== String Functions Part 1 [ 6 Functions ] ====================
  ===================================================================================
    */ 
    
  /*
    String Functions
    - lcfirst(String[Required])
    - ucfirst(String[Required])
    - strtolower(String[Required])
    - strtoupper(String[Required])
    - ucwords(String[Required], Delimiters[Optional])
    - str_repeat(String[Required], Count[Required])
  */

    // echo lcfirst("Elzero Web School") . "<br>";//first charcater lower
    // echo ucfirst("elzero web school") . "<br>";//first character upper 
    // echo strtolower("ELZERO WEB SCHOOL") . "<br>";//convert upper to lower
    // echo strtoupper("elzero web school") . "<br>";//convert lower to upper
    // echo ucwords("elzero web school") . "<br>";//Every First character of word is upper
    // echo ucwords("elzero,web school", ",") . "<br>";//choose sepeartor
    // echo str_repeat("Elzero", 3);
//?##################################################################################################################################

  /*
  ===================================================================================
  ====================== String Functions Part 2 [ 7 Functions ] ====================
  ===================================================================================
    */ 
  /*
    String Functions
    - implode(Separator[Optional], Array[Required]) => join() Is Alias
    - explode(Separator[Required], String[Required], Limit[Optional])
    - str_shuffle(String[Required])
    - strrev(String[Required])
    - trim(String[Required], CharsList[Optional])
    - ltrim(String[Required], CharsList[Optional])
    - rtrim(String[Required], CharsList[Optional])
    --- Space ""
    --- Tab \t
    --- New Line \n
    --- Carriage Return \r
    --- Vertical Tab "\x0B"
    --- NULL "\0"
  */

  //  $friends = ["Ahmed", "Osama", "Ali", "Salem"];

  // echo implode(" ", $friends) . "<br>";
  // echo implode(", ", $friends) . "<br>";
  // echo implode("@@", $friends) . "<br>";
  // echo implode($friends) . "<br>";

  // $str = "Elzero Web School Is Cool";

  // echo "<pre>";
  // print_r(explode(" ", $str));
  // echo "</pre>";

  // echo "<pre>";
  // print_r(explode("I", $str));
  // echo "</pre>";

  // echo "<pre>";
  // print_r(explode(" ", $str, 3));
  // echo "</pre>";

  // echo "<pre>";
  // print_r(explode(" ", $str, -2));
  // echo "</pre>";
  //   ###############################################
  //echo str_shuffle("Elzero") . "<br>";
  // echo strrev("Elzero") . "<br>";

  // echo strlen("   Elzero  ") . "<br>";
  // echo strlen(trim("   Elzero  ")) . "<br>";

  // echo trim("#@@Elzero@@@###", "@") . "<br>";//will not remove becuase search from right and left and not find anything

  // echo rtrim("#@@Elzero@@@###", "#@") . "<br>";
  // echo ltrim("#@@Elzero@@@###", "#@") . "<br>";
//?##################################################################################################################################

  /*
  ===================================================================================
  ====================== String Functions Part 3 [ 5 Functions ] ====================
  ===================================================================================
    */ 
    /*
    String Functions
    - chunk_split(String[Required], Length[Optional], End[Optional])
    - strlen(String[Required])
    - str_split(String[Required], Length[Optional])
    - strip_tags(String[Required], Allowed[Optional])
    - nl2br(String[Required], XHTML[Optional])
  */
          
        // echo chunk_split("Elzero Web School",3,"@");
        // echo "<br>";

        // echo "<pre>";
        //   print_r(str_split("Elzero"));
        // echo "</pre>";

        // echo "<pre>";
        //   print_r(str_split("Elzero",2));
        // echo "</pre>";

        // echo "<h3>Hello <b>Elzero</b></h3>";
        // echo "<br>";
        // echo strip_tags("<h3>Hello <b>Elzero</b></h3>");
        // echo "<br>";
        // echo strip_tags("<h3>Hello <b>Elzero</b></h3>","<h3> , <br>");
        // echo "<br>";

        // echo nl2br("Elzero\nWeb\nSchool", false);//wtihout selfclosing tag </br>
//?##################################################################################################################################

  /*
  ===================================================================================
  ====================== String Functions Part 4 [ 5 Functions ] ====================
  ===================================================================================
    */ 
      /*
    String Functions
    - strpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - strrpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive// last occurance of Letter
    - stripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - strripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - substr_count(String[Required], Value[Required], Start Position[Optional], Length[Optional])
  */
        // var_dump(strpos("Hello Hello","H"));// 0
        // echo "<br>";
        // var_dump(strpos("Hello Hello","H",3));// 6
        // echo "<br>";
        // var_dump(strpos("Hello Hello","H",6));// 6
        // echo "<br>";
        // var_dump(strpos("Hello Hello","h"));//False
        // echo "<br>";
        // var_dump(strpos("Hello Hello","H",-2));//false
        // echo "<br>";
        // var_dump(strpos("Hello Hello","H",-5));//int(6)
        // echo "<br>";
        // var_dump(strpos("Hello Hello","H",-11));//int(0)
        // echo "<br>";
        // var_dump(strrpos("Hello Hello","H"));//int(6)
        // echo "<br>";
        // var_dump(strrpos("Hello Hello","H",5));//int(6)
        // echo "<br>";
        // var_dump(stripos("Hello Hello","h"));//0
        // echo "<br>";
        // var_dump(strripos("Hello Hello","h"));//6
        // echo "<br>";
        //  var_dump(substr_count("Hello Hello","He"));//2
        //  echo "<br>";
        //  var_dump(substr_count("Hello Hello","He",1));//1
        //  echo "<br>";
        //  var_dump(substr_count("Hello Hello","He",1,6));//2
        //  echo "<br>";
        //  //overlap string
        //   var_dump(substr_count("abcdabcda","abcda"));//2
        //  echo "<br>";

//?##################################################################################################################################

  /*
  ===================================================================================
  ====================== String Functions Part 5 [ 4 Functions ] ====================
  ===================================================================================
    */ 
      /*
    String Functions
    - parse_str(String[Required], Array[Required])
    - quotemeta(String[Required]) The quotemeta() is an in-built function of PHP, which is used to add a backslash before some meta characters in the string. It returns the string by adding the backslash before every meta characters. It avoids SQL injections attacks of our database
    - str_pad(String[Required], Length[Required], String[Optional], Pad Flag[Optional])
    --- STR_PAD_BOTH
    --- STR_PAD_LEFT
    --- STR_PAD_RIGHT
    - strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required])
      */
      //
      // parse_str("name=adham&email=adham@gmail.com&os=mac",$query);
      // echo "<pre>";
      // print_r($query);
      // echo "</pre>";
      // echo $query["name"]."<br>";
      // echo $query["email"]."<br>";
      // echo $query["os"]."<br>";

      // echo "Hello [] () * + . <br>";
      // echo quotemeta("Hello [] () * + . <br>");
      // // الاولوية فى الاعداد الفردية هتبقى للى على اليمين الاول
      // echo str_pad("12", 8, 0, STR_PAD_BOTH) . "<br>";
      // echo str_pad("321", 8, 0, STR_PAD_BOTH) . "<br>";
      // echo str_pad("1313", 8, 0, STR_PAD_LEFT) . "<br>";
      // echo str_pad("15435", 8, 0, STR_PAD_LEFT) . "<br>";
      // echo str_pad("500432", 8, 0, STR_PAD_LEFT) . "<br>";
      // echo strtr("E@zero Web Sch##@","@","l");// stand for string translation 
      // echo "<br>";
      // $translation = ["@" => "l", "#" => "o"];
      // echo strtr("E@zero Web Sch##@",$translation);
//?##################################################################################################################################

  /*
  ===================================================================================
  =================== String Functions – str_replace, str_ireplace ==================
  ===================================================================================
    */ 
      /*
    String Functions
    - str_replace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
    --- Its Case-Sensitive
    - str_ireplace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
  */
  // echo str_replace("@","o","Elzer@ web Sch@@l",$r);
  // echo "<br>";
  // echo "Replace Count is $r"; //3

  // echo "<br>";
  // echo str_replace(["#","@"],"A","E#zer@ web Sch@@#",$r);
  // echo "<br>";
  // echo str_replace(["#","@"],["l","o"],"E#zer@ web Sch@@#",$r);
  // echo '<pre>';
  // print_r(str_replace("One", 1, ["One", "Two", "Three", "One", "One"]));
  // echo '</pre>';
  // echo '<pre>';
  // print_r(str_replace(["One", "Two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
  // echo '</pre>';
  // echo '<pre>';
  // print_r(str_replace(["One", "Two", "Three"], [1, 2], ["One", "Two", "Three", "One", "One"]));
  // echo '</pre>';
  // echo '<pre>';
  // print_r(str_ireplace(["one", "two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
  // echo '</pre>';
//?##################################################################################################################################

  /*
  ===================================================================================
  ======================== String Functions – substr_replace ========================
  ===================================================================================
    */ 
      /*
    String Functions
    - substr_replace(String[Required], Replace With Or Insert[Required], Start[Required], Length[$])
    --- $ Positive Number => Length Of String To Be Replaced
    --- $ Negative Number => Characters Left At The End After Replacement
    --- $ 0               => Insert Instead Of Replace
  */

  // echo substr_replace("onetwo",1,0);//1 1
  // echo "<br>";
  // echo substr_replace("onetwo",1,3);//one1  هتبدى تبدل من اول مكان 3 
  // echo "<br>";
  // echo substr_replace("onetwo",1,5);//oneTw1
  // echo "<br>";
  // echo substr_replace("OneTwo", 1, -1); // OneTw1
  // echo "<br>";
  // echo substr_replace("OneTwo",2,3,3 ); // one2
  // echo "<br>";
  // echo substr_replace("OneTwo", 2, 1, 4); // O2o
  // echo '<br>';
  // echo substr_replace("Elzero_Web_School", "A", 7, 3); // Elzero_A_School
  // echo '<br>';
  // echo substr_replace("Elzero_Web_School", "A", 7, -1); // Elzero_Al_School
  // echo "<br>";
  // echo substr_replace("Elzero_Web_School", "A", 7, -9); // Elzero_Aeb_School
  // echo '<br>';
  // echo substr_replace("Elzero_Web_School", "A", 7, -10); // Elzero_AWeb_School
  // echo '<br>'; 
  // echo substr_replace("Elzero_Web_School", "@", 1, 0); // E@lzero_Web_School  => insert not replace
  // echo "<pre>";
  // print_r(substr_replace(["OneTwo", "ThreeFour"],1,7));
  // echo "</pre>";
//?##################################################################################################################################

  /*
  ===================================================================================
  ======================== String Functions – substr_replace ========================
  ===================================================================================
    */ 
      /*
    String Functions
    - wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Optional = False])
    - ord(String[Required])
    - chr(Int[Required])
    - similar_text(String_One[Required], String_Two[Required], Percent[Optional])
    --- Returns The Number Of Matching Characters
  */
  // $str = "Welcome To To To T Elzeroo Web School Website Very_Very_Very_Long";

  // echo strlen($str) . "<br>";

  // echo wordwrap($str, 8, "<br>", True);

  // echo "<br>";

  // echo ord("a"); // 97 return acsii code 

  // echo "<br>";

  // echo chr(97); // a return character with ascii code
 
  //echo "<br>";
  // echo similar_text("Elz@ero", "Elz@er7",);
  // echo "<br>";

  //  echo similar_text("adham", "adham", $perc);

  // echo "<br>";

  // echo $perc;
//?##################################################################################################################################

  /*
  ===================================================================================
  ===================== String Functions Part 9 [ 3 Functions ] =====================
  ===================================================================================
    */ 
      /*
    String Functions
    - strstr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- => Alias [strchr]
    --- Case-Sensitive
    - stristr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- Case-Insensitive
    - number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Separator[Optional])
  */
  // echo strstr("Elzero Web", "W") . "<br>"; // Web
  // echo strstr("Elzero Web", "z") . "<br>"; // Web
  // echo strstr("Elzero Web Web", "W",true) . "<br>"; // Web
  // echo strlen(strstr("Elzero Web", "W", True)) . "<br>"; // 7

  // echo strstr("Elero Web", "w") . "<br>"; // False
  // var_dump(strstr("Elzero Web", "w"));
  // echo "<br>";

  // echo stristr("Elzero Web", "w") . "<br>"; // False
  // var_dump(stristr("Elzero Web", "w"));
  // echo "<br>";
  // echo 10_000_000;
  // echo '<br>';
  // echo number_format(10000000.156023);
  // echo '<br>';
  // echo number_format(10000000.156023, 3);
  // echo '<br>';
  // echo number_format(10000000.156023, 3, "@");
  // echo '<br>';
  // echo number_format(10000000.156023, 3, "@", "#");
  //هنا 
//?##################################################################################################################################

  /*
  ===================================================================================
  ==================== تكليفات PHP Bootcamp من الدرس 53 إلى 62 ====================
  ===================================================================================
    */ 
    //التكليف 1 
    // $num_one = -1;
    // $num_two = 2.5;
            
    // $let_one = "o";
    // $let_two = "z";
            
    // $str = "El%er0";
    // $str[(int)$num_two]=$let_two;
    // $str[$num_one]=$let_one;
            
    // Write Your Code Here
            
    // echo $str; // Elzero
    //التكليف 2
    // $str = "Orezle";
    // echo ucfirst(strrev(lcfirst($str)));
    // echo "<br>";
    //التكليف 3
    //  $str = 'aAa';
    //  $num = 3;
    //  $char = "_";
    //  echo str_repeat(strtolower($str.$char),$num);
    //  echo "<br>";
    // echo strtolower(chunk_split(str_repeat($str,$num),$num,$char));
    //التكليف 4
    // $str = "<div><b>Elzero</b></div>";
    // echo strip_tags($str,"<b>");// what is will ignore
    //التكليف 5
    // $str = "Elzero Web School";
    // $e = "e";
    // $o = "O";
    // $four = 4;

    // echo substr_count($str,$e,$four);
    // echo "<br>";
    // echo substr_count($str,lcfirst($o),-$four);
    //التكليف 06
    // $chars = ["E", "l", "z", "e", "r", "o"];
    // echo implode($chars);
    //التكليف 07
    // $chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
    // $chars=implode($chars);
    // echo ucfirst(strtolower(str_replace([1,2],["",""],$chars)));
//?##################################################################################################################################

  /*
  ===================================================================================
  ====================== Array Functions Part 1 [ 4 Functions ] =====================
  ===================================================================================
    */ 
     /*
    Array Functions

    - array_chunk(Array[Required], Length[Required], Preserve_Key[Optional])
    --- Split An Array Into Chunks [Return A Multidimensional Indexed Array]
    --- Preserve_Key
    ------ [False => Default] Reindex The Keys
    ------ [True] Preserve The Keys

    - array_change_key_case(Array[Required], Case[Optional])
    --- Changes The Case Of All Keys In An Array
    --- Case
    ------ [CASE_LOWER => Default] Changes The Keys To Lowercase
    ------ [CASE_UPPER] Changes The Keys To Uppercase

    - array_combine(Array_Of_Keys[Required], Array_Of_Values[Required])

    - array_count_values(Array[Required])
    --- Counts All The Values Of An Array

  */
  // $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal"];
  // echo "<pre>";
  // $arr=array_chunk($friends,2);
  // print_r($arr);
  // echo "</pre>";

  // $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
  // echo "<pre>";
  // print_r(array_chunk($countries,2,true));//true to save keys =>EG, KSA
  // echo "</pre>";

  // echo "<pre>";
  // print_r(array_change_key_case($countries,CASE_UPPER));//default => LOWER_CASE
  // echo "</pre>";

  // $keys = ["A", "O", "K"];
  // $values = ["Ahmed", "Osama", "Kamal"];//must have the same number of elements
  // echo "<pre>";
  //         print_r(array_combine($keys,$values));
  // echo "</pre>";

    // $counting = ["B", "A", "A", "B", "B", "B", "C"];
    
    // echo "<pre>";
    //         print_r(array_count_values($counting));
    // echo "</pre>";
//?##################################################################################################################################

  /*
  ===================================================================================
  ====================== Array Functions Part 2 [ 5 Functions ] =====================
  ===================================================================================
    */ 
        /*
    Array Functions

    - array_reverse(Array[Required], Preserve[Optional])
    --- Reverse Array Elements

    - array_flip(Array[Required])
    --- Exchange Keys With Its Values

    - count(Array[Required], Mode[Optional])
    --- Count Array Elements
    --- Mode
    ------ 0 => Default => Does Not Count Elements Of Multidimensional Arrays
    ------ 1 => Count Elements Of Multidimensional Arrays

    - in_array(Search[Required], Array[Required], Type[Optional])
    --- Checks If A Value Exists In An Array

    - array_key_exists(Key[Required], Array[Required])
    --- Check If Key Is Exists
    */
    // $family = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", ["Eman", "Noha"]];
    // echo "<pre>";
    // print_r($family);
    // print_r(array_reverse($family,TRUE));//keey index using => True
    // echo "</pre>";
    
    // $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
    // echo "<pre>";
    //       print_r(array_flip($countries));//key become value value become key
    // echo "</pre>";

    // $counting = [
    //   "A",
    //   "B",
    //   "C",
    //   [1, 2, 3]
    // ];
    //   echo count($counting);
    //   echo "<br>";
    //   echo sizeof($counting,true);// to count multidimansal array
    //   echo count($counting,true);// to count multidimansal array
    //   echo "<br>";
      // $search = ["1", 2, 3, 4];
      // if(in_array(1,$search)):

      //   echo "The Element Is Found";
      // endif;

    //   echo "<br>";

    //   if(in_array(1,$search,TRUE)): // to check type add another parmeter

    //     echo "The Element Is Found";
    //   endif;

    //   echo "<br>";

      // $courses = [
      //   "Javascript" => 95,
      //   "PHP" => 100,
      //   "HTML" => 60,
      //   "CSS" => 65
      // ];
      // if(array_key_exists("HTML",$courses)): // to check type add another parmeter
      //   echo "The course Is Found";
      //   echo "<br>";
      //   echo "The Price Is: ".$courses["HTML"];
      // endif;
//?##################################################################################################################################

  /*
  ===================================================================================
  ====================== Array Functions Part 3 [ 5 Functions ] =====================
  ===================================================================================
    */ 
    /*
    Array Functions

    - array_keys(Array[Required], Value[Optional], Type[Optional])
    --- Return The Array Keys
    --- Type
    ------ False => Default => No Checking For Type
    ------ True => Check For Type

    - array_values(Array[Required])
    --- Return All The Values Of An Array

    - array_pad(Array[Required], Size[Required], Value[Required])
    --- Pad Array To The Specified Length With A Value
    --- Negative Value Add Elements Before Original Items
    --- If Size < Array Length Nothing Will Be Deleted

    - array_product(Array[Required])
    --- Calculate The Product Of Values In An Array => Return Int || Float
    --- In Mathematics, A Product Is The Result Of Multiplication

    - array_sum(Array[Required])
    -- Calculate The Sum Of Values In An Array

  */
  // $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Osama", "Eman", 1, "1"];
  // echo "<pre>";
  //     print_r(array_keys($friends));
  // echo "</pre>";

  // echo "<pre>";
  //     print_r(array_keys($friends,"Osama"));
  // echo "</pre>";

  // echo "<pre>";
  //     print_r(array_keys($friends,"1"));//not check type but you can true
  // echo "</pre>";

  // $countries = ["EG" => "Egypt", ",TRUEKSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

  // echo '<pre>';
  // print_r(array_values($countries));
  // echo '</pre>';

  $pad = ["A", "B", "C", "D"];

  // echo "<pre>";
  //     print_r(array_pad($pad,10,"@"));//after
  // echo "</pre>";

  // echo "<pre>";
  //     print_r(array_pad($pad,-10,"@"));//before
  // echo "</pre>";

  // echo '<pre>';
  // print_r(array_pad($pad, 2, "@"));//will give original array
  // echo '</pre>';

  // $product = [ 10 , 5 , 2 , 10];
  // echo array_product($product);

  // echo "<br>";

  // $sum = [ 10, 5 , 2 , 10 ];
  // echo array_sum($sum);
//?##################################################################################################################################

    /*
  ===================================================================================
  ========================= Current, Next, Prev, Reset, End =========================
  ===================================================================================
    */ 
      /*
    Array Functions

    --- Every Array Has An Internal Pointer To Its "Current" Element
    --- Which Is Initialized To The First Element.
    --- Functions Returns Value Of Array Element That's Currently Pointed By The Internal Pointer

    - current(Array[Required]) => Return The Current Element In An Array
    - next(Array[Required]) => Advance The Internal Pointer
    - prev(Array[Required]) => Rewind The Internal Pointer
    - reset(Array[Required]) => Put The Internal Pointer On First Element
    - end(Array[Required]) => Put The Internal Pointer On Last Element
  */
  // $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Eman"];
  // echo current($friends) . "<br>"; // "Osama"
  // echo next($friends) . "<br>"; // "Ahmed"
  // echo current($friends) . "<br>"; // "Ahmed"
  // echo next($friends) . "<br>"; // "Sameh"
  // echo current($friends) . "<br>"; // "Sameh"
  // echo prev($friends) . "<br>"; // "Ahmed"
  // echo reset($friends) . "<br>"; // "Osama"
  // echo current($friends) . "<br>"; // "Osama"
  // echo end($friends) . "<br>"; // "Eman"
  // echo current($friends) . "<br>"; // "Eman"
//?##################################################################################################################################

    /*
  ===================================================================================
  ================= Array Merge, Array Replace, Array Rand, Shuffle =================
  ===================================================================================
    */ 
        /*
    Array Functions

    - array_merge(Array[Required], Other_Array/s[Optional])
    --- Merge One Or More Arrays
    ------ Later Array Key With The Same Name Override The Value Of The Previous One
    ------ Numeric Key Will Be Renumbered

    - array_replace(Array[Required], Replacement/s[Optional])
    --- Replaces Elements From Passed Arrays Into The First Array
    ------ Same Key => Value In Second Array Replace Same Key => Value In First Array
    ------ If Key In Second Array Not Found In Fisrt Array It Will Be Created

    - array_rand(Array[Required], Num[Optional])
    --- Pick One Or More Random Keys Out Of An Array

    - shuffle(Array[Required])
    --- Shuffle An Array
         */
        // $merge_one = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
        // $merge_two = ["One" => "HTML", "Four" => "Python"];
      
        // echo '<pre>';
        // print_r(array_merge($merge_one, $merge_two));
        // echo '</pre>';
      
        // $merge_three = [10 => "PHP", 20 => "CSS", 30 => "JavaScript"];
        // $merge_four = [40 => "Python", "10" => "Go"];
      
        // echo '<pre>';
        // print_r(array_merge($merge_three, $merge_four));
        // echo '</pre>';
      
        // $main = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
        // $replace = ["One" => "HTML", "Four" => "Python"];
      
        // echo '<pre>';
        // print_r(array_replace($main, $replace));
        // echo '</pre>';
      
        // echo '<pre>';
        // print_r(array_replace($merge_three, $merge_four));
        // echo '</pre>';
      
        // $nums = ["A", "B", "C", "D"];
      
        // echo $nums[array_rand($nums)] . "<br>";
        // echo '<pre>';
        // print_r(array_rand($nums,3));
        // echo '</pre>';
      
        // shuffle($nums);
      
        // echo '<pre>';
        // print_r($nums);
        // echo '</pre>';
//?##################################################################################################################################

    /*
  ===================================================================================
  ================= Array Shift, Array Pop, Array Push, Array Unshift  =================
  ===================================================================================
    */ 
      /*
    Array Functions

    - array_shift(Array[Required])
    --- Shift An Element Off The Beginning Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_pop(Array[Required])
    --- Pop The Element Off Ehe End Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_push(Array[Required], Values[Optional])
    --- Push One Or More Elements Onto The End Of Array
    --- You Can Use $arr[]

    - array_unshift(Array[Required], Values[Optional])
    --- Add One Element In The Beginning Of An Array
    --- This Function Will Reset => "reset()" The Input Array Pointer
      */
      $chars = ["A", "B", "C", "D"];
      // echo '<pre>';
      // print_r($chars);
      // echo '</pre>';

      // $first= array_shift($chars);
      // echo "$first<br>"; // "A"

      // echo '<pre>';
      // print_r($chars);      
      // echo '</pre>';

      
      // $last = array_pop($chars);

      // echo "$last<br>"; // "D"

      // echo '<pre>';
      // print_r($chars);
      // echo '</pre>';
      // array_push($chars, "X", "Y", "Z");

      // echo '<pre>';
      // print_r($chars);
      // echo '</pre>';

      // array_push($chars, "1");

      // $chars[] = "1";//another way to push one element

      // echo '<pre>';
      // print_r($chars);
      // echo '</pre>';

      // array_unshift($chars, "One", "Two", "Three");

      // echo '<pre>';
      // print_r($chars);
      // echo '</pre>';    

//?##################################################################################################################################

    /*
  ===================================================================================
  =============== Array Shift, Array Pop, Array Push, Array Unshift  ================
  ===================================================================================
    */ 
      /*
    Array Functions

    - array_slice(Array[Required], Start[Required], Length[Optional], Preserve_Keys[Optional])
    --- Extract A Slice Of The Array
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Slicing Until This Index
    ------ Not Set => All Elements From Start Position
    --- Preserve Keys
    ------ False => Default => Reset Keys
    ------ True => Preserve Keys
    --- If Array Have String Keys, It Will Always Preserve The Keys

    - array_splice(Array[Required], Start[Required], Length[Optional], Array[Optional])
    --- Remove A Portion Of The Array And Replace It With Something Else
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Removing Until This Index
    ------ Not Set => Remove All Elements From Start Position
      */
      // $chars = ["A", "B", "C", "D", "E", "F", "G"];
      // $chars_with_string_keys = ["A" => 1, "B" => 2, "C" => 3];
      // $chars_with_numeric_keys = [10 => 1, 20 => 2, 30 => 3];
    
      // echo '<pre>';
      // print_r(array_slice($chars,2));
      // print_r(array_slice($chars,-4));
      // print_r(array_slice($chars,2,3));
      // print_r(array_slice($chars,2,-2));
      // echo '</pre>';

      // echo '<pre>';
      // print_r(array_slice($chars_with_string_keys, 0, 2));
      // print_r(array_slice($chars_with_numeric_keys, 0, 2));
      // print_r(array_slice($chars_with_numeric_keys, 0, 2,TRUE));//keep my keys
      // echo '</pre>';

      // echo "<pre>";
      // print_r($chars);
      // echo "</pre>";

      // $nums = [10, 20, 30, 40, 50, 60, 70];
    
      // echo '<pre>';
      // print_r(array_splice($nums, 2, 1, ["One", "Two"]));
      // print_r($nums);
      // echo '</pre>';
//?##################################################################################################################################

    /*
  ===================================================================================
  =================== Array Functions Part 8 [ 7 Sort Functions ]  ==================
  ===================================================================================
    */ 
     /*
    Array Functions

    - sort(Array[Required], Flag[Optional])
    --- Sort An Indexed Array In Ascending Order

    - rsort(Array[Required], Flag[Optional])
    - Sort An Indexing Array In Descending Order

    - asort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Ascending Order According To The Value

    - arsort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Descending Order According To The Value

    - ksort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Ascending Order According To The Key

    - krsort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Descending Order According To The Key

    - natsort(Array[Required], Flag[Optional])
    --- Sorts An Array By Using A "Natural Order" Algorithm

    Practice
    -- Flags
    -- Our Own Sorting Function
  */
  // $names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];
  // sort($names);
  // echo '<pre>';
  // print_r($names);
  // echo '</pre>';

  // rsort($names);
  // echo '<pre>';
  // print_r($names);
  // echo '</pre>';

  // $countries = ["S" => "Syria", "E" => "Egypt", "I" => "Iraq", "Q" => "Qatar"];

  // asort($countries);//sort based on values
  
  // echo '<pre>';
  // print_r($countries);
  // echo '</pre>';

  // arsort($countries);

  // echo '<pre>';
  // print_r($countries);
  // echo '</pre>';

  // $codes = ["1" => "Syria", "3" => "Egypt", "2" => "Iraq", "5" => "Qatar"];

  // ksort($codes);//sort based on key Ascending

  // echo '<pre>';
  // print_r($codes);
  // echo '</pre>';

  // krsort($codes);//Descending

  // echo '<pre>';
  // print_r($codes);
  // echo '</pre>';

  // $files = ["Photo1.png", "Photo20.png", "Photo3.png"];

  // sort($files);

  // echo '<pre>';
  // print_r($files);
  // echo '</pre>';

  // natsort($files);

  // echo '<pre>';
  // print_r($files);
  // echo '</pre>';
//?##################################################################################################################################

    /*
  ===================================================================================
  ============================ Array Map, Array Filter  =============================
  ===================================================================================
    */ 
      /*
    Array Functions

    - array_map(Callback Function[Required], Array[Required], Other Arrays[Optional])
    --- Applies The Callback To The Elements Of The Given Arrays

    - array_filter(Array[Required], Callback Function[Required], Flag[Optional])
    --- Filter Values Of An Array Using A Callback Function
    --- Flag
    ------ ARRAY_FILTER_USE_KEY
    ------ ARRAY_FILTER_USE_BOTH
    ------ 0 Default => Send Value As Arguments

  */
  // function add_title($fname, $lname) {
  //   return "Hello Mr $fname $lname";
  // }

  //  // echo add_title("Osama");

  //  $first_names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];
  //  $last_names = ["Ameer", "Samy", "Shady", "Amr", "Mohamed", "Ibrahim"];

  //  echo '<pre>';
  //  print_r(array_map("add_title", $first_names, $last_names));
  //  print_r(array_map(fn($f, $l) => "Hello Mr $f $l", $first_names, $last_names));
  //  echo '</pre>';
  //  $nums = [
  //   1 => 3,
  //   6 => 1,
  //   3 => 2,
  //   4 => 8,
  //   5 => 4
  // ];
  // function check_nums($n1, $n2) {
  //   return $n1 > 4 || $n2 > 4;
  // }

  // echo '<pre>';
  // print_r(array_filter($nums, "check_nums", ARRAY_FILTER_USE_BOTH));
  // echo '</pre>';
//?##################################################################################################################################

    /*
  ===================================================================================
  ================================= Array Reduce  ===================================
  ===================================================================================
    */ 
      /*
    Array Functions

    - array_reduce(Array[Required], Callback Function[Required], Initial_Value[Optional])
    --- Reduce The Array To A Single Value
    --- Carry => The Value Of The Previous Iteration || Initial Value
    --- Item => The Value Of The Current Iteration
  */
  //   function add($carry,$item) {
  //     echo "$carry <br>";
  //     echo "$item <br>";
  //     echo $carry + $item.  "<br>";
  //     echo "####################<br>";
  //     return $carry+$item;
  //   }
  // $nums = [10, 20, 50, 100, 10];
  // echo array_reduce($nums,"add",100);
//?##################################################################################################################################

    /*
  ===================================================================================
  ================= تكليفات PHP Bootcamp من الدرس 63 إلى 72  ======================
  ===================================================================================
    */ 
    //التكليف 1
    // $friends = [
    //   "AG" => "Ahmed Gamal",
    //   "OM" => "Osama Mohamed",
    //   "MG" => "Mahmoud Gamal",
    //   "AS" => "Ahmed Samy",
    //   "FA" => "Farid Ahmed",
    //   "SM" => "Sayed Mohamed"
    // ];
    // echo "<pre>";
    // print_r(array_chunk(array_change_key_case($friends),2,true));
    // echo "</pre>";
    ############################
    // التكليف 2
    // $codes = ["H", "C", "J"];
    // $means = ["HTML", "CSS", "JavaScript"];
    // echo "<pre>";
    // print_r(array_combine(array_map('strtolower',$codes),$means));
    // echo "</pre>";
    ############################
    // التكليف 3 
    // $friends = [
    //   "Ahmed Gamal" => "AG",
    //   "Osama Mohamed" => "OM",
    //   "Mahmoud Gamal" => "MG",
    //   "Ahmed Samy" => "AS"
    // ];
    // echo "<pre>";
    // print_r(array_reverse(array_flip($friends)));
    // echo "</pre>";
    ############################
    //التكليف 4
    // $nums = [10, 20, 30];
    
    // echo array_sum($nums);

    // echo "<br>";

    // echo array_reduce($nums,fn($carry,$item) => $carry+$item );
    ############################
    // التكليف 5
    // $nums = [5, 10, 20, 5, 30, 40];
    // function add($carry,$item) {
    //   if($item==5)
    //     $item=0;
    //     return $carry+$item;
    // }
    // echo array_reduce($nums,"add");
  //   echo array_reduce($nums, function($carry, $value) {
  //     if ($value == 5)
  //         return $carry;
  //     else
  //         return $carry + $value;
  // });
    ############################
    // التكليف 6
    // $chars = ["A", "B", "C", "D", "E"];
    // $char = "@@";
    // $zero = 0;

    // echo "<pre>";
    // print_r(array_pad($chars,10,$char[$zero]));//not woring way
    // array_push($chars,$char[$zero],$char[$zero],$char[$zero],$char[$zero],$char[$zero]);
    // print_r($chars);
    // echo "</pre>";
    ############################
    //التكليف 7
    // $names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

    // // Write Line Here
    // next($names);
    // // Write Line Here
    // next($names);
        
    // echo current($names) . "<br>"; // "Sayed"
        
    // // Write Line Here
    // end($names);
        
    // echo current($names) . "<br>"; // "Ali"
        
    // // Write Line Here
    // reset($names);
    // echo current($names) . "<br>"; // "Osama"
        
    // // Write Line Here
    // end($names);
    // // Write Line Here
    // prev($names);
        
    // echo current($names) . "<br>"; // "Mahmoud"
    ############################
    //التكليف 8 
    //  $chars = ["A", "B", "C"];
    // echo "<pre>";
    // print_r(array_pad($chars,4,"D"));
    // echo "</pre>";

    // $chars2=["D"];
    // echo "<pre>";
    // print_r(array_merge($chars,$chars2));
    // echo "</pre>";

    // array_push($chars,"D");
    // echo "<pre>";
    // print_r($chars);
    // echo "</pre>";

    // $chars2=["3"=>"D"];//make it not have the same key 
    // echo "<pre>";
    // print_r(array_replace($chars,$chars2));
    // echo "</pre>";

    // $chars[]="D";
    // echo "<pre>";
    // print_r($chars);
    // echo "</pre>";

    // $pos = 3;
    // $val = "D";

    // array_splice($chars, $pos, 0, $val);

    // echo "<pre>";
    // print_r($chars);
    // echo "</pre>";    
    ############################
    //التكليف 9
    // $nums = [1, 2, 3, 4, 5, 6];
    // echo "<pre>";
    // print_r(array_slice($nums,1,3));
    // echo "</pre>";
    ############################
    //التكليف 10
    // $mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
    // $nums = [4, 5, 6];
    // array_splice($mix,3,3,$nums);
    // echo "<pre>";
    // print_r($mix);
    // echo "</pre>";
    //التكليف 11
    //    $arr = ["A", "B", "C", "D", "E"];

      //  function myown($input) {
      //       $all=0;
      //       foreach($input as $value)
      //       {
      //         $all++;
      //       }
      //       return $all;
      //  }
    // echo myown($arr);
    ############################
    // التكليف 12 
    // $nums = [11, 2, 10, 7, 20, 50];

    // function sum ($arr) {
    //   $sum=0;
    //   foreach ($arr as $values) {
    //     $sum +=$values;
    //   }
    //   return $sum;
    // }
    // echo sum($nums);
    ############################
    // التكليف 13
    // $nums = [10, 100, -20, 50, 30];
    // function maxelemnt ($arr) {
    //   $max=$arr[0];
    //   for ($value=1;$value < count($arr); $value++) {
    //     if($arr[$value]>$max):
    //       $max=$arr[$value];
    //     endif;
    //   }
    //   return $max;
    // }
    // echo maxelemnt($nums);
    ############################
    // التكليف 14
    // $nums = [10, 100, -20, 50, 30];
    // function minelemnt ($arr) {
    //   $min=$arr[0];
    //   for ($value=1;$value < count($arr); $value++) {
    //     if($arr[$value]<$min):
    //       $min=$arr[$value];
    //     endif;
    //   }
    //   return $min;
    // }
    // echo minelemnt($nums);
    ############################
    // التكليف 15
    //   $chars = ["o", "r", "e", "z", "l", "E"];
    //   function myown($input) {
    //     $all=0;
    //     foreach($input as $value)
    //     {
    //       $all++;
    //     }
    //     return $all;
    //}
    //   function all_string($characters) {
    //     $all="";
    //     for( $start=myown($characters)-1; $start>=0; $start-- ) {
    //       $all=$all.$characters[$start];
    //     }
    //     return $all;
    //   }
    //   echo all_string($chars);
    ############################
    //التكليف 16
    // $mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
    //   function check_nums ($input) {
  
    //       if( is_int($input) ) {
    //         if( $input % 2 != 0 )
    //         {
    //           return $input;
    //         }
    // }}
    // $arr=array_filter($mix,"check_nums");
    // sort($arr);
    //   echo "<pre>";
    //     print_r( $arr);
    //   echo "</pre>";
    ############################
    //التكليف 17 
    // $nums = [1, 2, 3, 4, 5, 6];
    // foreach($nums as $num) {
    //   $random_num=rand(0,count($nums)-1);
    //   echo $random_num;
    //   echo"<hr>";
    //   $num_position =array_search($num,$nums);
    //   echo $num_position;
    //   [$nums[$num_position],$nums[$random_num]]= [$nums[$random_num],$nums[$num_position]];
    // }
    // echo "<pre>";
    // print_r($nums);
    // echo "</pre>";
    // ############################
    //التكليف 18
    //  $title = "E&z\$r0 W\$b Sch00&";
    //  $search= ["&","\$",0];
    //  $replace = ["l","e","o"];
    //  echo str_replace($search ,$replace,$title,$count);
    //  echo '<br>';
    //  echo $count;
//?##################################################################################################################################

    /*
  ===================================================================================
  ============================ abs, mt_rand, intdiv, fmod  ==========================
  ===================================================================================
    */ 
      /*
    Math Functions

    - abs(Number[Required])
    --- Absolute Value => Non Negative Value

    - mt_rand(min[Optional], max[Optional]) || rand(min[Optional], max[Optional])
    --- mt_getrandmax() => Show Largest Possible Random Value
    --- Generate Random Value Via The Mersenne Twister Random Number Generator Algorithm

    - intdiv(dividend[Required], divisor[Required])
    --- Integer Division
    --- intdiv vs /

    - fmod(dividend[Required], divisor[Required])
    --- Floating Point Remainder (Modulo)
    --- fmod vs %
  */

  // echo abs(10) . "<br>";
  // echo abs(0) . "<br>";
  // echo abs(-20) . "<br>";

  // echo rand() . "<br>";
  // echo mt_getrandmax() . "<br>";// return maximum value can be generated
  // echo rand(50, 60) . "<br>";//rand value between 50 60
  // echo 10 / 5 . "<br>";// 10 / 5= 2
  // echo gettype(10 / 5) . "<br>";

  // echo 11 / 5 . "<br>";//double value
  // echo gettype(11 / 5) . "<br>";

  // echo intdiv(11, 5) . "<br>";
  // echo gettype(intdiv(11, 5)) . "<br>";//give always interger value

  // echo 11.5 % 5 . "<br>";
  // echo gettype(11 % 5) . "<br>";

  // echo fmod(11.5, 5) . "<br>";//give % double value
  // echo gettype(fmod(11.5, 5)) . "<br>";
//?##################################################################################################################################

    /*
  ===================================================================================
  ===================================== ceil, floor  ================================
  ===================================================================================
    */ 
     /*
    Math Functions

    - ceil(Number[Required])
    --- Round Up To Integer

    - floor(Number[Required])
    --- Round Down To Integer
  */

  // -1 -2 -3 -4 -5 -6
  // 1  2  3  4  5  6

  // echo ceil(5.99) . "<br>";
  // echo ceil(5.49) . "<br>";
  // echo ceil(5.10) . "<br>";
  // echo ceil(5.01) . "<br>";
  // echo ceil(-5.99) . "<br>"; // -5

  // echo floor(5.99) . "<br>";
  // echo floor(5.49) . "<br>";
  // echo floor(5.10) . "<br>";
  // echo floor(5.01) . "<br>";
  // echo floor(-5.99) . "<br>"; // -6
//?##################################################################################################################################

    /*
  ===================================================================================
  ======================================== round  ===================================
  ===================================================================================
    */
      /*
    Math Functions

    - round(Number[Required], Precision[Optional], Mode[Optional])
    --- Round Up To Integer
    --- Mode
    ------ PHP_ROUND_HALF_UP
    ------ PHP_ROUND_HALF_DOWN
    ------ PHP_ROUND_HALF_EVEN
    ------ PHP_ROUND_HALF_ODD

    - ceil, floor, round => Return Double
  */
  // echo round(5.99) . "<br>";
  // echo round(5.50) . "<br>";
  // echo round(5.49) . "<br>";
  // echo round(5.10) . "<br>";
  
  // echo round(5.99, 1) . "<br>"; // 6
  // echo round(5.94, 1) . "<br>"; // 5.9
  // echo round(5.995, 2) . "<br>"; // 6
  // echo round(5.994, 1) . "<br>"; // 6
  // echo round(5.994, 2) . "<br>"; // 5.99

  // echo "<hr>";
  // echo round(5.99, 0, PHP_ROUND_HALF_UP) . "<br>";//6
  // echo round(5.49, 0, PHP_ROUND_HALF_UP) . "<br>";//5

  // echo round(5.51, 0, PHP_ROUND_HALF_DOWN) . "<br>";//5

  // echo round(5.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";//6
  // echo round(4.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";//4

  // echo round(5.50, 0, PHP_ROUND_HALF_ODD) . "<br>";//5
  // echo round(4.50, 0, PHP_ROUND_HALF_ODD) . "<br>";//5
//?##################################################################################################################################

    /*
  ===================================================================================
  =================================== sqrt, min, max  ================================
  ===================================================================================
    */
      /*
    Math Functions

    - sqrt(Number[Required])
    --- Square Root

    - min(array[Required]) || min(Values[Required])
    --- Find Lowest Value

    - max(array[Required]) || min(Values[Required])
    --- Find Highest Value
  */

  // echo sqrt(16) . "<br>"; // 4
  // echo sqrt(25) . "<br>"; // 5
  // echo sqrt(100) . "<br>"; // 10

  // echo min(10, 20, -40, -30, 50) . "<br>"; // -40
  // echo min([10, 20, -40, -30, 50]) . "<br>"; // -40

  // echo "<pre>";
  // print_r(min([1, 3, 5], [1, 2, 6]));
  // echo "</pre>";

  // echo max(10, 20, -40, -30, 50) . "<br>"; // 50
  // echo max([10, 20, -40, -30, 50]) . "<br>"; // 50

  // echo "<pre>";
  // print_r(max([1, 3, 5], [1, 2, 6]));
  // echo "</pre>";
 #################################################################################################################################
    /*
  ===================================================================================
  ======================= filter_list, filter_id, filter_var  =======================
  ===================================================================================
    */
     /*
    Filter Functions

    - filter_list()
    --- Returns A List Of All Supported Filters

    - filter_id(Filter_Name[Required])
      what is filter it used for =>
      https://stackoverflow.com/questions/60364919/php-what-is-filter-id-used-for
      
    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Filters A Variable With A Specified Filter
  */
  // echo '<pre>';
  // print_r(filter_list());
  // echo '</pre>';
  // echo filter_id("boolean"). "<br>";
  $val="on"; // True || 1 || "yes" || "on"
   // if(filter_var($val,258)) {
  // if(filter_var($val,FILTER_VALIDATE_BOOL)) {

  //     echo "This Is True";
  // }
  //   else {
  //     echo "This Is False";
  //   }
//?##################################################################################################################################

    /*
  ===================================================================================
  ======================= filter_var Validate Filters Part 1  =======================
  ===================================================================================
    */
 /*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters

    ------ FILTER_VALIDATE_BOOL => [True, 1, Yes, On]
    ---------- Flag => FILTER_NULL_ON_FAILURE => False For [False, 0, No, Off, ""] Only

    ------ FILTER_VALIDATE_URL
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_PATH_REQUIRED
    ---------- Flag => FILTER_FLAG_QUERY_REQUIRED

    ------ FILTER_VALIDATE_IP
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_IPV4
    ---------- Flag => FILTER_FLAG_IPV6

    ------ FILTER_VALIDATE_MAC
    ---------- Flag => FILTER_NULL_ON_FAILURE
  */
  // $bool="Elzero"; // True | 1 | "yes" | "on"
  // var_dump(filter_var($bool,FILTER_VALIDATE_BOOL,FILTER_NULL_ON_FAILURE)); 

  // echo "<br>";

  // $url = "https://elzero.org/?id=100";

  // var_dump(filter_var($url, FILTER_VALIDATE_URL,
  // ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));

  // echo "<br>";

  // $ip="192.168.2.1";
  // var_dump(filter_var($ip,FILTER_VALIDATE_IP,["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]));

  // echo "<br>";
  // $mac= "00:00:e:00d:53:af";
  // var_dump(filter_var($mac, FILTER_VALIDATE_MAC));
//?##################################################################################################################################

    /*
  ===================================================================================
  ======================= filter_var Validate Filters Part 2  =======================
  ===================================================================================
    */
        /*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters

    ------ FILTER_VALIDATE_EMAIL
    ---------- Flag => FILTER_NULL_ON_FAILURE

    ------ FILTER_VALIDATE_INT
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Options => min_range
    ---------- Options => max_range
    ---------- Convert To Int On Success

    ------ FILTER_VALIDATE_FLOAT
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Options => min_range
    ---------- Options => max_range
    ---------- Convert To Float On Success
   */
  // $email="o@nn.sa";

  // var_dump(filter_var($email,FILTER_VALIDATE_EMAIL,FILTER_NULL_ON_FAILURE));

  // echo "<br>";
  
  // $int="100";
  
  // var_dump(filter_var(
  //   $int,
  //   FILTER_VALIDATE_INT,
  //   ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
  // ));

  // echo "<br>";

  // $float="90.5";
  
  // var_dump(filter_var(
  //   $float,
  //   FILTER_VALIDATE_FLOAT,
  //   ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
  // ));

//?##################################################################################################################################

    /*
  ===================================================================================
  ========================== filter_var Sanitize Filters  ===========================
  ===================================================================================
    */
    /*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Sanitize Filters

    ------ FILTER_SANITIZE_EMAIL
    ------ Remove All But Letters + Digits + !#$%&#038;'*+-=?^_`{|}~@.[]
    ------ Test ¥

    ------ FILTER_SANITIZE_NUMBER_INT
    --------- Remove All But Digits, +, -

    ------ FILTER_SANITIZE_NUMBER_FLOAT
    --------- Remove ALL But Digits, +, - And Optionally [.,eE]
    --------- Flags => FILTER_FLAG_ALLOW_THOUSAND
    --------- Flags => FILTER_FLAG_ALLOW_FRACTION

    ------ FILTER_SANITIZE_URL
    ------ Remove All But Letters + Digits + $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
    ------ Test ¥ + Space
  */
  // $email = "o@n  ¥   n.sa";
  // var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));
  // echo "<br>";

  // $int="100 + !@@@LHKLJKJFKLJKLJFKL  f;ldkf;lsdkfl;kdshfksdhdfkjs;lkdsf===-100";

  // var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));

  
  // $float = "1,950,150.65AAASSS    sdfdsfsdfsdf@@@@41";
  
  // echo "<br>";

  // var_dump(filter_var(
  //   $float,
  //   FILTER_SANITIZE_NUMBER_FLOAT,
  //   ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
  // ));
  // echo "<br>";

  // $url = "https://el         zer¥¥¥¥¥o.org";

  // var_dump(filter_var($url, FILTER_SANITIZE_URL));

  // echo "<br>";  
  
//?##################################################################################################################################

    /*
  ===================================================================================
  ==================================== filter_input  ================================
  ===================================================================================
    */ 
      /*
    Filter Functions

    - filter_input(Type[Required], Value[Required], Filter[Optional], Options[Optional])
    --- INPUT_GET
    --- INPUT_POST
    --- INPUT_COOKIE
    --- INPUT_SERVER
    --- INPUT_ENV

    -- FILTER_VALIDATE_INT
    -- FILTER_NULL_ON_FAILURE
  */

      // echo $_GET["num"];
      // echo filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT,FILTER_NULL_ON_FAILURE);
       ?>

    <!-- <form action="" method="GET">
        <input type="text" name="num">
        <input type="submit" value="Send">
      </form> -->
    <?php
//?##################################################################################################################################

    /*
  ===================================================================================
  ==================================== تكليفات PHP Bootcamp من الدرس 73 إلى 81  ================================
  ===================================================================================
    */ 
    //تكليف 1 
    // echo rand(11,19);
    // echo "<br>";
    // echo rand(11,19);
    // echo "<br>";
    // echo rand(11,19);
    // echo "<br>";
    // echo rand(11,19);
    #####################################
    // تكليف 2
    // $friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];
    // echo $friends[shuffle($friends)];//return 1 but each time the array is shuffled in different way 
    //echo $friends[rand(0,3)];//another way
    #####################################
    // تكليف 3
      //  $num1 = 11.5; // 11
      //  $num2 = 9.4898; // 9.5
      //  $num3 = -7.5; // -7
      //  echo round($num1,0,PHP_ROUND_HALF_DOWN);
      //  echo "<br>";
      //  echo round($num2,1,PHP_ROUND_HALF_UP);
      //  echo "<br>";
      //  echo round($num3,0,PHP_ROUND_HALF_DOWN);
    #####################################
    //تكليف 4
    // $result=[];
    // foreach (filter_list() as $key => $filter):
    //         $key=filter_id($filter);
    //         $result[$key] =$filter;
    // endforeach;
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
    /////////////////////////
    // Another Way
    // $values=[];
    // $keys=[];
    // foreach (filter_list() as $key => $value){
    // array_push($values,$value);
    // array_push($keys,filter_id($value));
    // }
    // $mix=array_combine($keys,$values);
    // echo "<pre>";
    // print_r($mix);
    // echo "</pre>";
    #####################################
    // تكليف 5
    // $url1 = "http://www.elz ero.org";
    // $url2 = "http://¥elzero.org";
    // $url3 = "https://elzero.org";
    // $url4 = "https://elzero.o¥rg";
    // function check_website($url) {
    //   if(filter_var($url,FILTER_VALIDATE_URL))
    //         echo "A Valid URL"."<br>";
    //   else 
    //         echo "Not A Valid URL"."<br>";
    // }
    // check_website($url1);
    // check_website($url2);
    // check_website($url3);
    // check_website($url4);
    #####################################
    // تكليف 6
    // $url1 = "http://www.elz ero.org";
    // $url2 = "http://¥elzero.org";
    // $url3 = "https://elzero.org";
    // $url4 = "https://elzero.o¥rg";
    // echo filter_var($url1,FILTER_SANITIZE_URL);
    // echo "<br>";
    // echo filter_var($url2,FILTER_SANITIZE_URL);
    // echo "<br>";
    // echo filter_var($url3,FILTER_SANITIZE_URL);
    // echo "<br>";
    // echo filter_var($url4,FILTER_SANITIZE_URL);
//?##################################################################################################################################

    /*
  ===================================================================================
  ===================== File System Functions Part 1 [4 Functions]  =================
  ===================================================================================
    */ 
      /*
    File System Functions
    - disk_total_space()
    --- Get Total Space In Bytes => Then We Can Get [KB, MB, GB]
    - disk_free_space() || diskfreespace()
    --- Get Free Space In Bytes => Then We Can Get [KB, MB, GB]
    - file_exists(Path)
    --- Checks If A File Or Directory Exists
    - filesize(File_Name)
    --- Get Space In Bytes
  */ 
      // echo ceil(disk_total_space("C:")/1024/1024/1024) ."<br>";
      // echo ceil(disk_free_space("D:")/1024/1024/1024) ."<br>";
      // var_dump(file_exists("adham.txt"));
      // echo "<br>";
      // echo filesize("adham.txt");
//?##################################################################################################################################

    /*
  ===================================================================================
  ================================ is_dir, mkdir, rmdir  ============================
  ===================================================================================
    */ 
      /*
    File System Functions
    - is_dir(Name)
    --- Tells If The Filename Is A Directory
    - mkdir(Path[Required], Mode[Optional] = 0777, Recursive[Optional], Context[Optional])
    --- Permissions Is Ignored On Windows
    --- Permissions Is Octal Number Start With 0
    ------ Second Number Is => Owner Permission
    ------ Third Number Is => User Group Permission
    ------ Fourth Number Is => Others Permissions
    - rmdir(Name[Required], Context[Optional])
  */
    // var_dump(is_dir("test"));
    // echo "<br>";
    // var_dump(is_dir("adham.txt"));
    // echo "<br>";
    // mkdir("Test/upload/files",0777,true);
    //  rmdir("Test/upload/files");
    // var_dump(file_exists("Test/Upload/Files"));
//?##################################################################################################################################

    /*
  ===================================================================================
  ========================== chmod, fileperms, clearstatcache  ======================
  ===================================================================================
    */ 
      /*
    File System Functions
    - chmod(File[Required], Mode[Required])
    --- Change Mode
    - fileperms(Name)
    --- Gets File Permissions
    - clearstatcache()
    --- Clear Cache
    we using clearstatcache() because when file is changed we need to clear cache or it will 
    keep old data in cache and not show new data

    - You Can Change Owner chown()
    - You Can Change Group chgrp()
  */
  // mkdir("Y",0700);
  // echo fileperms("Y") . "<br>";
  // chmod("Y", 0644);
  // clearstatcache();
  // echo fileperms("Y") . "<br>";
//?##################################################################################################################################

    /*

  ======================== basename, dirname, realpath, pathinfo  ===================
  ===================================================================================
    */ 
      /*
    File System Functions
    - basename(Path[Required], Suffix[Optional])
    --- Returns Trailing Name Component Of Path
    - dirname(Path[Required], Levels[Optional] = 1)
    --- Returns A Parent Directory's Path
    --- Levels => Number of Parent Directories To Go Up
    - realpath(Path[Required])
    --- Returns Absolute Path
    - pathinfo(Path[Required], Flags[Optional]) => Return Array
    --- PATHINFO_DIRNAME
    --- PATHINFO_BASENAME
    --- PATHINFO_EXTENSION
    --- PATHINFO_FILENAME
  */
    // echo basename(__FILE__) . "<br>";
    // echo basename(__FILE__,".php") . "<br>";

    // echo dirname(__FILE__,1) ."<br>";

    // echo realpath(__FILE__)  ."<br>";

    // echo "<pre>";
    // print_r(pathinfo(__FILE__));
    // echo "</pre>";

    // echo pathinfo(__FILE__)["extension"] . "<br>";
    // echo pathinfo(__FILE__)["filename"] . "<br>";

    // echo pathinfo(__FILE__, PATHINFO_DIRNAME). "<br>";
//?##################################################################################################################################

    /*
  ===================================================================================
  ========================= fopen Part 1 – fgets, fread, fclose =====================
  ===================================================================================
    */ 
    /*
    File System Functions
    - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

    --- Mode
    --- [r] For Read => Pointer At The Beginning will give error if he can't find the file
    --- [r+] For Read & Write => Pointer At The Beginning
    --- [w] For Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists
    --- [w+] For Read & Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists

    - fgets(File[Required], Length[Optional])
    --- Get A Line From An Open File
    --- Length => Number Of Bytes To Read || End Of Line If No Length
    - fread(File[Required], Length[Required])
    --- Get A Data From An Open File
    --- Length => Maximum Number Of Bytes To Read
    - fclose(File[Required])
    --- Closes An Open File Pointer
  */
        // $handle=fopen("adham.txt","r");
        // echo fgets($handle,4);
          //  echo fread($handle,1024);
          //  fclose($handle);
//?##################################################################################################################################

    /*
  ===================================================================================
  ================================ fopen Part 2 – fwrite  ===========================
  ===================================================================================
    */ 
    /*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- Mode

  --- [a] For Write => Pointer At The End + Create If Not Exists
  --- [a+] For Read & Write => Pointer At The End + Create If Not Exists
  --- [x] Create + Open For Write => Pointer At The Beginning
  --- [x+] Create + Open For Read & Write => Pointer At The Beginning if the file exists it will return error

  - fwrite(File[Required], String[Required], Length[Optional])
  --- Write To An Open File
  --- Length => Maximum Number Of Bytes To Write
      // */
      // $handle=fopen("adham.txt","r+");//error
      // fwrite($handle, "\r\nThis Is A New Line 1\n", 5);
      // fwrite($handle, "\r\nThis Is A New Line 2\n");
      // fclose($handle);
//?##################################################################################################################################

    /*
  ===================================================================================
  ================================ fopen Part 3 – fwrite  ===========================
  ===================================================================================
    */ 
    /*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- [c]
  ------ For Write
  ------ Create If Not Exists
  ------ No Problem If Its Exists
  ------ No Truncation
  ------ Pointer At The Beginning
  --- [c+] For Read &#038; Write

  - file(File[Required], Flag[Optional], Context[Optional])
  --- Read Entire File Into Array
  - feof(File[Required])
  --- Tests For EOF On A File Pointer
    */
      // echo "<pre>";
      // print_r(file("adham.txt"));
      // echo "</pre>";
      // echo count(file("adham.txt"));
      // $handle=fopen("adham.txt","r");

      // $line=1;
      // echo "<br>";
      // while (! feof($handle)) {
      //   echo "Line $line => ".fgets($handle) . "<br>"; 
      //   $line++;
      // }
      // echo "<br>";
      // for ($i = 0; $i < count(file("adham.txt")); $i++) {
      //   echo "$line => ".fgets($handle) . "<br>";
      // }
      // fclose($handle);
//?##################################################################################################################################

    /*
  ===================================================================================
  ================================= Ftell, Fseek, Rewind  ===========================
  ===================================================================================
    */ 
    /*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  - rewind(File[Required])
  --- Return The Pointer To The Beginning Of The File
      
  - ftell(File[Required]) => new line +carriage return to start of line 
  --- Return Current Position Of The Pointer

  - fseek(File[Required], Offset[Required], Whence[Optional] = SEEK_SET)
  --- Go To A Position
  --- Offset In Bytes
  --- SEEK_SET => Equal To Offset
  --- SEEK_CUR => Current + Offset
  --- SEEK_END => EOF + Offset [Accept Negative]
    */
    // $handle = fopen("adham.txt", "r");

    // echo ftell($handle) . "<br>"; // 0
    
    // echo fgets($handle) . "<br>";
    
    // echo fgets($handle) . "<br>";
    
    // rewind($handle);
    
    // echo fgets($handle) . "<br>"; // Elzero
    
    // echo ftell($handle) . "<br>"; // 8
    
    // echo fgets($handle) . "<br>"; // Elzero
    
    // fseek($handle, -6,SEEK_END);
    
    // echo fgets($handle) . "<br>"; // zero Web School
    
    // fclose($handle);
    
    //  echo mb_strlen("Elzero\r\nWeb\r\nSchool\r\nI love El", "8bit");
//?##################################################################################################################################

    /*
  ===================================================================================
  ================================= Glob, Rename, Copy, Unlink  ===========================
  ===================================================================================
    */ 
    /*
  File System Functions

  - glob(Pattern[Required], Flags[Optional])
  --- Find Pathnames Matching A Pattern And Return Array

  - rename(Old[Required], New[Required]) => Move
  --- Renames A File Or Directory

  - copy(Old[Required], New[Required], Context[Optional])
  --- Copy A File

  - unlink(File[Required], Context[Optional])
  --- Delete A File

  Same Concept
  - opendir() => open a directory 
  - readdir() => read the content of a directory
  - closedir() => close a directory
  ! $_FILES is a PHP superglobal variable that is used to handle file uploads from HTML forms. It is populated automatically by PHP when a file is uploaded via an HTML form with the enctype="multipart/form-data" attribute. 
  !$_FILES is an associative array that contains information about the uploaded file, including the file's name, type, size, temporary filename, and any error codes associated with the upload process. 
  ! You can access the elements of $_FILES using their keys, which correspond to the name attributes of the input fields in the HTML form. For example, if your HTML form contains an input field with the name "my_file", you can access information about the uploaded file using $_FILES["my_file"].
    */
    // test/adham.txt
    // echo "<pre>";
    // print_r(glob("test/*.*"));
    // echo "</pre>";

    // Rename => Same Place
        // rename("test/new.php","test/new2.php");
    
    // rename other place => move 
       //  rename("test/new2.php","test/upload/new3.php");

   // Move To other place without rename
       // rename("test/test.php","test/upload/test.php");
   //Copy without Rename
        // copy("test/new3.php","test/upload/new3.php");
   // Copy With Rename
        // copy("test/new3.php","test/upload/new5.php");
   // delete file 
        // unlink("test/upload/new5.php");
//?##################################################################################################################################

    /*
  ===================================================================================
  ========================= File_Get_Contents, File_Put_Contents  ===================
  ===================================================================================
    */ 
  /*
  File System Functions

  - file_get_contents(File[Required], Include_Path[Optional], Context[Optional], Start[Optional], MaxLength(Optional))
  --- Reads Entire File Into A String

  - file_put_contents(File[Required], Data[Required], Mode[Optional], Context[Optional])
  --- Write Data To File
  --- Mode
  ------ FILE_APPEND => If File Exists Append To It

  - Create If Not Exists
  - Open And Close
  - Return Number Of Bytes

  Search
  - Get Set Include Path returns a string containing the current include_path configuration option for PHP. 
    */
        // echo get_include_path()."<br>";
        //true mean search in the inlcude path
        // echo file_get_contents("part1.txt",true,NULL,14,7);
        // echo file_get_contents("https://elzero.net");
        //  print_r(file("https://elzero.net"));
        // echo file_put_contents("adham.txt", "\r\nThis Is New Line", FILE_APPEND);
//?##################################################################################################################################

    /*
  ===================================================================================
  ======================= تكليفات PHP Bootcamp من الدرس 82 إلى 91  =================
  ===================================================================================
    */
        // التكليف 1 
        // echo round((disk_total_space("c:")/1024/1024/1024/1024),2)." TB";
        // echo "<br>";
        // echo round((disk_total_space("D:")/1024/1024/1024/1024),2)." TB";
        // التكليف 2 
          //  echo "Size In Megabyte Is: ".ceil(filesize("D:\All_In_One_Songs\Melodies\Requiem For A Dream - Kate Chruscicka - Electric Violinist  - Clint Mansell.mkv")/1024/1024);
          //  echo "<br>";
          //  echo "Size In Kilobyte Is: ".ceil(filesize("D:\All_In_One_Songs\Melodies\Requiem For A Dream - Kate Chruscicka - Electric Violinist  - Clint Mansell.mkv")/1024);
        //التكليف 3
          // mkdir("programming");
          // mkdir("programming/PHP");
          // chmod("programming",0740);
          // // echo fileperms("programming/PHP");
          // if(file_exists("programming/PHP")):
          //     echo "Directory Programming/PHP Removed"."<br>";
          //     rmdir("programming/PHP");
          // endif;
          // if(file_exists("programming")):
          // echo "Directory Programming Removed"."<br>";
          // rmdir("programming");
          // endif;
        // التكليف 4
            // function change_permissions($str) {
            //   if(is_dir($str)):
            //     echo "This Is Directory And Only Files Allowed"."<br>";
            //   elseif(!is_dir($str)):
            //     $ext=pathinfo($str,PATHINFO_EXTENSION);
            //     //$ext=filetype($str);
            //     if($ext=="txt"){

            //       echo "Permissions Changed"."<br>";
            //       chmod($str,0700,);
            //     }
            //     else {
            //       echo "File Extension Is Not Txt"."<br>";
            //     }  
            //   else: 
            //     echo "Go hell "."<br>";
                        
            //   endif;

            // }
            // echo change_permissions("test"); // This Is Directory And Only Files Allowed
            // echo change_permissions("index.php"); // File Extension Is Not Txt
            // echo change_permissions("adham.txt"); // Permissions Changed
        // التكليف 5
        // // Method 1
        // echo basename(__FILE__);
        // // Method 2
        // echo basename($_SERVER["SCRIPT_FILENAME"]);

        // // Method 3
        // echo pathinfo(__FILE__, PATHINFO_BASENAME);

        // // Method 4
        // echo basename($_SERVER['PHP_SELF']);
        // // Method 5 
        // $pos = strrpos(__FILE__, '\\');
        // $filename = substr(__FILE__, $pos + 1);
        // echo $filename; // Outputs "test.php"
        //تكليف 6 
        // way 1
          // echo file("elzero.txt")[0].file("elzero.txt")[1];
          // echo "<br>";
          // $handle=fopen("elzero.txt",'r');
          // way 2
          // echo fgets($handle)." ".fgets($handle);
          // way 3
          // $lines=file_get_contents("elzero.txt");
          // $lines=explode("\n",$lines);
          // echo "<br>";
          // echo "{$lines[0]}{$lines[1]}";
          // echo "<br>";
          // fclose($handle);
        // تكليف 7  
          // $handle=fopen('elzero.txt','r+');
          // fseek($handle,6);
          // fwrite($handle,'Elzero');
          // fclose($handle);
          //another solution 
          // $str=file_get_contents("elzero.txt");
          // $newcontent=str_replace("Osamaa ","Elzero ",$str);
          // file_put_contents("elzero.txt",$newcontent);
 //?##################################################################################################################################

  /*
   =========================================================================================
   ========================= Datetime Functions Part 1 – Five Functions  ===================
   =========================================================================================
    */   
    /*
    Date And Time Functions

    - date_default_timezone_get()

    - date_default_timezone_set(timezone[Required])

    - date_create(Date/Time[Optional], Timezone[Optional])
    --- Time: Date/Time String || Current Time If NULL
    --- Timezone: Timezone String || Current Timezone

    - timezone_open(Timezone)

    - checkdate(M, D, Y) => All Required
    --- Validate A Gregorian Date

    Will Cover Later
    - date()
    - date_format()
  */
  //get Timezone
  //       echo date_default_timezone_get()."<br>";
  // //print date and time 
  //       echo date("Y-m-d H:i:s")."<br>";
  // //change Timezone
  //       echo date_default_timezone_set("Africa/Cairo");
  // //print Data and Time Again
  //       echo date("Y-m-d H:i:s")."<br>";
  // //Get Timezone Again
  //       echo date_default_timezone_get()."<br>";
  // //Create Date Object
  //       $d=date_create("",timezone_open('Indian/Antananarivo'));
  // // Echo Date with Format
  //       echo date_format($d,"Y-m-d H:i:s");
  // //check Date
        // echo "<br>";
        // var_dump(checkdate(10,25,1982));
        // echo "<br>";
        // var_dump(checkdate(31,2,1982));//error no 31 in month 2 in 1982
        // echo "<br>";
 //?##################################################################################################################################

  /* 
   =============================================================================================
   ========================= Datetime Functions Part 2 – Data Format Part 1  ===================
   =============================================================================================
    */   
       /*
    Date And Time Functions

    - date_format()

    [Year]
    - Y => Four Digits
    - y => Two Digits

    [Month]
    - m => 01-12
    - M => Text Month => 3 Letters
    - F => Full Text
    - t => Number Of Days In This Month

    [Day]
    - d => Day of The Month 1-31
    - j => Day Without Leading Zero
    - D => Text Day => 3 Letters
    - l => Full Text
    - z => Day Of The Year 0-365
    - S => st, rd, nth Suffix For Day Of The Month
    st => first day
    nd => second day
    rd => Third Day
    th => other days in the month

    [Time]
    - a => Small am/pm
    - A => Capital AM/PM

    [Hour]
    - g => 1-12
    - h => 01-12
    - G => 0-23
    - H => 00-23

    [Minutes, Seconds, Micro]
    - i => 00-59
    - s => 00-59
    - u => Microseconds

  */
      // date_default_timezone_set("Africa/Cairo");
      
      $d=date_create('2022-12-31 15:5:10');
      // $d=date_create('');
      // echo date_format($d,"Y")."<br>";//2023
      // echo date_format($d,"y")."<br>";//23
      ///////////////////////////////////////
      // echo date_format($d,"Y-m")."<br>";//23
      // echo date_format($d,"Y-M")."<br>";//23
      // echo date_format($d,"Y-F")."<br>";//23
      // echo date_format($d,"t")."<br>";//28
      ///////////////////////////////////////
      // echo date_format($d,"Y-m-d")."<br>";//print with leading zero 01
      // echo date_format($d,"Y-m-j")."<br>";//wihout leading zero
      // echo date_format($d,"Y-m-D")."<br>";//part of day name
      // echo date_format($d,"Y-m-l")."<br>";//full day name
      // echo date_format($d,"Y-m-l-z")."<br>";//number of days for this year
      // echo date_format($d,"Y-m-l-djDl")."<br>";//use combination
      // echo date_format($d,"Y-m-l-S")."<br>"; 
      ///////////////////////////////////////
      //  echo date_format($d,"Y-m-d g a")."<br>";
      //  echo date_format($d,"Y-m-d g A")."<br>"; 
      //  echo date_format($d,"Y-m-d h a")."<br>"; 
      //  echo date_format($d,"Y-m-d G ")."<br>"; 
      //  echo date_format($d,"Y-m-d H ")."<br>"; 
      //  echo date_format($d,"Y-m-d H/i/s u ")."<br>"; 
      /**
       * !fsafdsafdf
       * *imp
       * ?ahdlsfjsdfs
       * TODO:adham elganzoury
       * @param myparam the paramter for this method
       */
##################################################################################################################################
  /*
   =============================================================================================
   ========================== Datetime Functions Part 4 – Add, Sub, Modify  ====================
   =============================================================================================
    */   
     /*
    Date And Time Functions

    - date_interval_create_from_date_string() the best used in comparsion
    - date_add()
    - date_sub()
    - date_modify()
  */
    //  date_default_timezone_set("Africa/Cairo");
    //  $d=date_create();
    //  echo date_format($d,"Y/m/d H-i-s a");
    //  date_add($d, date_interval_create_from_date_string('1 year 2 months 5 days'));
    //  date_sub($d, date_interval_create_from_date_string('1 year 2 months 5 days'));
    //  date_modify($d, '+1 year +12 month ');
    //  echo date_format($d,"Y/m/d H-i-s a");
//?##################################################################################################################################

  /*
   ===============================================================================================
   ==================== Datetime Functions Part 5 – Time, Get_Date, Parse_Date  ==================
   ===============================================================================================
    */   
     /*
    Date And Time Functions

    - time()
    --- Unix Timestamp => Seconds Since 01 Jan 1970

    - getdate()

    - date_parse()

  */

  // date_default_timezone_set("Africa/Cairo");
  // echo time() / 60 . " Minutes<br>";
  // echo time() / 60 / 60 . " Hours<br>";
  // echo time() / 60 / 60 / 24 . " Days<br>";
  // echo time() / 60 / 60 / 24 / 365 . " Years<br>";
  // echo "<pre>";
  //  print_r(getdate());
  // echo "</pre>";
  // $t=getdate();
  // echo $t['year'],"<br>";
  // echo "<pre>";
  // print_r(date_parse("1985-2-31 5:25:15 UTC"));
  // echo "</pre>";
//?##################################################################################################################################

  /*
   ===============================================================================================
   ======================= Datetime Functions Part 6 – Date_Diff, Strtotime  =====================
   ===============================================================================================
    */  
      /*
    Date And Time Functions

    - date_diff()
    - strtotime(DateTime, Base)
  */
  // date_default_timezone_set("Africa/Cairo");
  // $reg = date_create("1990-10-01");
  // $now = date_create("now");
  // $diff = date_diff($reg, $now);
  // echo '<pre>';
  // print_r($diff);
  // echo '</pre>';
  // echo "You Are A Member For ".$diff->days." Days<br>";
  // echo date('Y-m-d H:i:s',strtotime("next friday"))."<br>";
  // echo date('Y-m-d H:i:s',strtotime("+1 year"))."<br>";
  // echo date("Y-m-d H:i:s", strtotime("tomorrow")) . "<br>";
  // echo date("Y-m-d M D H:i:s", strtotime("tomorrow",strtotime('1982-10-25'))) . "<br>";
//?##################################################################################################################################

  /*
   =======================================================================================
   ======================= تكليفات PHP Bootcamp من الدرس 92 إلى 97 =====================
   =======================================================================================
    */ 
      //!تكليف 1 
      //  date_default_timezone_set('Asia/Riyadh');
      //  echo date_default_timezone_get();
      //  echo "<br>";
      //  echo "<br>";
      //  echo date("D, d M y - h:i:s a");
      //  echo "<br>";
      //  echo "<br>";
      //  echo date("l, d F Y - h:i:s a");
      //!تكليف 2
      // $date = "2005-10-02";
      // date_default_timezone_set('Africa/Cairo');
      // echo date_default_timezone_get()."<br>";
      // $d=date_create("$date");
      // date_add($d, date_interval_create_from_date_string('15 hours 15 minutes 15 seconds'));
      // date_sub($d, date_interval_create_from_date_string('5 seconds'));
      // echo date_format($d,'Y, F, l \'dS\' H:i:s');
      //!تكليف 3
      // $date = "1950-10-01";
      // date_default_timezone_set('Africa/Cairo');
      // echo strtotime($date);//seconds from 1970-01-01
      // echo "<br>";
      // echo time();
      // echo "From Epoch Time Till 1990-10-01 Is Approximately ".floor((time() - strtotime($date)) / (60 * 60 * 24))." Days";
      // echo "<br>";
      // echo "From Epoch Time Till 1990-10-01 Is Approximately ".floor((time() - strtotime($date)) / (60 * 60 * 24 * 365.25))." Years";
      //! تكليف 4   
      // $date = "1990-10-01";
      // date_default_timezone_set('Africa/Cairo');  
      //    $reg = date_create("$date");
      //    $now = date_create("now");
      //    $diff = date_diff($reg, $now);   
      //    echo "You Are A Member For ".$diff->days." Days<br>";
      //    echo "You Are A Member For ".$diff->y." Years<br>";
      //!تكليف 5
      // Using Date() Function.
      // echo date('U') . "<br>"; // 1668020233. //array we get only seconds from timestamp
      // echo getdate()[0];

      // Using gettimeofday() Function.
      // $t = gettimeofday(); 
      // echo $t['sec'] . "<br>"; // 1668020233. 

      // Using microtime() Function. 
      // echo microtime(true) . "<br>"; // 1668020233 return float but if we use false it will return string
//?##################################################################################################################################
  /*  
   ===============================================================================================
   =================================== How To Use Cookies Part 1  ================================
   ===============================================================================================
    */  
  /*
    Cookies

    - Examples
    --- Popup
    --- Custom Settings
    --- Remember Me => Login
      ! if we not set the time expire for cookie the default value will be when the session end
    - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
    --- Name
    --- Value
    --- Expire
    --- Path
    --- Domain
    --- Secure
    --- HTTP_Only
  */
  // setcookie('style','dark',time()+60*60*24*30);
//?##################################################################################################################################
  /*
   ===============================================================================================
   =================================== How To Use Cookies Part 2  ================================
   ===============================================================================================
    */  
      /*
    Cookies

    - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
    --- Name
    --- Value
    --- Expire
    --- Path
    --- Domain
    --- Secure
    --- HTTP_Only

    Important
    - DO NOT Store Sensitive Information
    - Not Everything Saved To Cookies
  */
  // setcookie('style','dark',time()+60*60*24*30,'/');
  // setcookie('popup','done',strtotime('+1 month'));
  // echo "<pre>";
  // print_r($_COOKIE);
  // echo "</pre>";
  // echo $_COOKIE['style'];
  
//?##################################################################################################################################
  /*   
   ===============================================================================================
   =================================== Cookies Modify And Delete  ================================
   ===============================================================================================
    */  
/*
Cookies
- Modify
- Delete
- Add Array
*/
  // setcookie('style','light');
  // setcookie('style','light',time()-1);//delete cookie
  // setcookie("style[color]", "red");
  // setcookie("style[font]", "Tahoma");
  // setcookie("style[layout]", "boxed");
  // echo "<pre>";
  // print_r($_COOKIE);
  // echo "</pre>";
  // if(isset($_COOKIE['style'])){
  //   echo $_COOKIE['style']['color'];
  // }   
//?##################################################################################################################################
  /*
   ===============================================================================================
   =======================================  Cookies Practice  ====================================
   ===============================================================================================
    */  
//?##################################################################################################################################

    // if(isset($_COOKIE['background'])){
    //   echo "<style>body{ background-color: ".$_COOKIE["background"]. "}</style>";
    // }
    // if($_SERVER["REQUEST_METHOD"]=="POST"){
    //   setcookie('background',$_POST['bg-color'],strtotime('+1 second'));
    //   header('location:'.$_SERVER['REQUEST_URI']);
    //   exit();
    // }
    // $form=<<<heredoc
    // <form action="" method="POST">
    //   <input type="color" name="bg-color">
    //   <input type="submit" value="Choose Color">
    // </form>
    // heredoc;
    // echo $form;
//?##################################################################################################################################
  /*
   ===============================================================================================
   =====================================  Session Introduction  ==================================
   ===============================================================================================
    */  
    
  /*
    Sessions
    - Session Is Stored On The Server
    - Session Store Only A User Key In Cookie To Know Its You
    - Key Are Generated By PHP Engine So Its Almost Impossible To Guess
    - You Need To Add It Before Any Output
  */
  // session_start();

  // $_SESSION['name'] = "Ahmed";
  // $_SESSION['id'] = 1005;

  // echo '<pre>';
  // print_r($_SESSION);
  // echo '</pre>';
  // echo '<a href="test.php">Test</a>';
//?##################################################################################################################################
  /*
   ===============================================================================================
   ==================================  Session Edit And Practice  ================================
   ===============================================================================================
    */ 
     /*
    Sessions
    - Advanced Information
    - Edit
    - Views Count
  */
  // session_id("lkjsdklfjksdfsdf");

  // session_start();

  // echo session_id();

  // $_SESSION['name'] = "Elzero";

  // isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] = 1;

  // echo "Hello " . $_SESSION['name'] . " Views Count Is " . $_SESSION['views'];
  // echo '<a href="about.php">About</a>';
//?##################################################################################################################################
  /*
   ===============================================================================================
   =============================  Session Destroy And Login Simulation ===========================
   ===============================================================================================
    */ 
     /*
    Sessions
    - Advanced Information
    - Edit
    - Views Count
  */

  /*
    Sessions
    - Unset And Destroy
    - Login And Logout Simulation
  */

  // session_start();

  // $_SESSION['name'] = "Elzero";
  // session_unset();
  // session_destroy();

//   if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     if ($_POST['user'] === "Osama") {
//       $_SESSION['username'] = "Elzero";
//       $_SESSION['id'] = 1005;
//     }
//   }

//   echo '<pre>';
//   print_r($_SESSION);
//   echo '</pre>';

//   if (isset($_SESSION['username'])) {
//     echo "Welcome " . $_SESSION['username'];
//   } else {
// <form action="" method="POST">
//   <input type="text" name="user">
//   <input type="submit" value="Login">
// </form>

/* <?php } ?> */

// <a href="logout.php">Logout</a>
//?##################################################################################################################################
  /*
   ===============================================================================================
   ======================================  Header And Redirect ===================================
   ===============================================================================================
    */ 
     /*
    Header
    - Send RAW HTTP Header To Client To Manipulate Info Sent By Web Server Before Any Output
    - You Can Use To Control Cache Or Force File Download

    header(Header[Required], Replace[Optional] = True, Response_Code[Optional])
  */
  // header("HTTP/1.0 404 Not Found");
  // header("expires: Sat, 01 Jan 2022 01:00:00");
  // header("cache-control: no-cache, must-revalidate");
  // echo "<a href='test.php'>Test</a>";
  // header("Refresh:5; url=test.php");
  // header("Location: test.php");
  // exit;
//?##################################################################################################################################
  /*
   =========================================================================================================================
   ======================================  تكليفات PHP Bootcamp من الدرس 98 إلى 105 ======================================
   =========================================================================================================================
    */ 
//! تكليف 1 
// setcookie("site[layout]",'boxed',time()+65*24*60*60);
// setcookie("site[font]",'swat',time()+65*24*60*60);
// setcookie("site[blue]",'blue',time()+65*24*60*60);
//! تكليف 2 
// echo "<pre>";
// print_r($_COOKIE);
// echo "</pre>";
// echo "Your Color IS {$_COOKIE ['site']['blue']} Your Font Is  {$_COOKIE ['site']['font']}";
//! تكليف 3 
// setcookie("site[layout]",'boxed',time()-1);
//! تكليف 4
// setcookie("site[font]", 'swat', 0);
// setcookie("site[blue]", 'blue', 0);
// session_destroy();
// session_unset();
//!##################################################################################################################################
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

//COMM########################################################
/**
 * Sleep(Seconds)
 * usleep(Useconds)
 * time_sleep_until(Timestamp)
 */
// function checkfile(){
//   if(file_exists("adham.txt")){
//     echo "Good File is Found ";
//   }
//   else{
//     sleep(5);
//     checkfile();
//   }
// }
// echo checkfile();
//COMM########################################################





































// function add_commas_and_underscore($number) {
//   $result=number_format($number);
//   if(strlen($number)>3)
//       $result[-4]="_";
//   return $result;
// }
// echo add_commas_and_underscore(120); // 120
// echo "<br>";
// echo add_commas_and_underscore(1530); // 1_530
// echo "<br>";
// echo add_commas_and_underscore(120510650); // 120,510_650
// echo "<br>";
// echo add_commas_and_underscore(510650480910); // 510,650,480_910
// echo "<br>";
// echo add_commas_and_underscore(12069057014032); // 12,069,057,014_032
////////////////////////////////////////////////////