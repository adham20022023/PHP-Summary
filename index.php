<?php
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
//Why To learn PHP
// Easy To Install And Learn
// Big Community For Support
// Famous Framework “Laravel”
// Work With Many Databases
// Work With All Hosting Services  
//===============================================================================================================================
/*
===================================================================================
===================== PHP Tags And Instructions Separation ========================
===================================================================================
*/
//   echo 'We Love PHP';
//   echo '<br>';

//   ECHO 'We Love PHP';
//   ECHO '<br>';

//   print 'We Love PHP';
//   print '<br>';

//   PRINT 'We Love PHP';
//   PRINT '<br>';
/* <?='We Love PHP With Short Tag';?>*///short tag
//===============================================================================================================================
/*
===================================================================================
========================= Comments And Best Practices =============================
===================================================================================
*/
 // Single Line Comment
//  echo 'Test'; // Single Line Comment
//  echo 'Test'; # Single Line Comment

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

//  echo 'Test' /* Single Line */;

 // I Used Print Because Its Faster Than Echo <= Example Not True
//  print 'Test';
//===============================================================================================================================
/*
===================================================================================
========================== Introduction To Data Type ==============================
===================================================================================
*/
 /*
  ============================================
  = Data Types
  = ----------
  = bool  => Boolean
  = int   => Integer
  = float => Floating Point Number | double
  = string
  = array
  = Other Types
  = gettype()
  ============================================
  */

  // echo gettype(True);
  // echo '<br>';
  // echo gettype(False);
  // echo '<br>';
  // echo gettype(true);
  // echo '<br>';
  // echo gettype(100);
  // echo '<br>';
  // echo gettype(-200);
  // echo '<br>';
  // echo gettype(0);
  // echo '<br>';
  // echo gettype(70.30);
  // echo '<br>';
  // echo gettype(-60.30);
  // echo '<br>';
  // echo gettype('Elzero');
  // echo '<br>';
  // echo gettype("Elzero");
  // echo '<br>';
  // echo gettype(array("EG" => "Egypt", "KSA" => "Saudi Arabia"));
  // echo '<br>';
  // echo gettype(array("Egypt", "Saudi Arabia"));
  // echo '<br>';
  // echo gettype(["Egypt", "Saudi Arabia"]);
//===============================================================================================================================
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
//=============================================================================================================================== 
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
  // echo True; // 1
  // echo '<br>';
  // echo gettype(True); // Boolean
  // echo '<br>';
  // echo True + True; // 2
  // echo '<br>';
  // echo gettype(True + True); // Integer
  // echo '<br>';
  // echo 5 + '5 Lessons'; // 10 => Warning
  // echo '<br>';
  // echo gettype(5 + '5 Lessons'); // Integer => Warning
  // echo '<br>';
  // echo 10 + 15.5; // 25.5
  // echo '<br>';
  // echo gettype(10 + 15.5); // double => Float
  // echo '<br>';
//===============================================================================================================================
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
  ============================================
  */

  // echo 5 + (int) "5 Lessons";
  // echo '<br>';
  // echo 5 + (integer) "5 Lessons";
  // echo '<br>';
  // echo 5 + ( integer ) "5 Lessons";
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
//===============================================================================================================================
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
//===============================================================================================================================
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
= nl2br()
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
//===============================================================================================================================
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
============================================
*/

// $name = "Osama";

// // Heredoc
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

// echo <<<"navlinks"
// <ul>
//   <li>$name</li>
//   <li>$name</li>
//   <li>$name</li>
//   <li>$name</li>
// </ul>
// navlinks;
//===============================================================================================================================
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

//   echo '<pre>';
//   print_r([
//     0 => "Sameh",
//     "A" => "Ahmed",
//     "B" => "Basem",
//     "Mahmoud",
//     True => "Sayed",
//     "1" => "Osama",
//     "Gamal",
//     9 => "Amera",
//     "Eman",
//     "Mohamed",
//     False => "Asmaa",
//     8 => "Haytham",
//     "Samer",
//     "Names" => [
//       "Osama",
//       "Ahmed",
//       "Sayed" => [
//         "1",
//         "2",
//         "3"
//       ]
//     ]
//   ]);
//   echo '</pre>';
//
//===============================================================================================================================
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
/////////////////////////////////////
// //التكليف 03
// echo 'Hello "Elzero" \\\\ """ We Love "$$PHP"';
// echo "<br>";
/////////////////////////////////////
// //التكليف 04
// echo nl2br("We \n Love \n Elzero \n Web \n School");
// echo '<br>';
/////////////////////////////////////
// //التكليف 05
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
//===============================================================================================================================
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
  
//===============================================================================================================================
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
//===============================================================================================================================
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

  // echo $a;
  // echo "<br>";
  // echo $$a;
  // echo "<br>";
  // echo $osama;
  // echo "<br>";
  // echo $$$a;
  // echo "<br>";
  // echo $elzero;
  // echo "<br>";
  // echo "Hello ${$a}"; // $$a
  // echo "<br>";
  // echo "Hello ${$$a}"; // $$$a
//===============================================================================================================================
