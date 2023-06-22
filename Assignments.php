<?php
  /*
   Write a PHP script to get the PHP version and configuration information
  */
    //phpinfo(); 
##################################################################################################################################
  /*
   Write a PHP script to display the following strings. Go to the editor
   Sample String :
   'Tomorrow I \'ll learn PHP global variables.'
   'This is a bad command : del c:\\*.*'
   Expected Output :
   Tomorrow I 'll learn PHP global variables.
   This is a bad command : del c:\*.* 
   */
    //echo  nl2br("
    //Sample String :
    //'Tomorrow I \'ll learn PHP global variables.'
    //'This is a bad command : del c:\\*.*'
    //Expected Output :
    //Tomorrow I 'll learn PHP global variables.
    //This is a bad command : del c:\*.* 
    //");
##################################################################################################################################
 /*
  $var = 'PHP Tutorial'. Put this variable into the title section
  , h3 tag and as an anchor text within an HTML document
 */
    ?>
<!-- <?php $var="PHP Tutorial" ?>
    <html>
    <body>
    <h3><?=$var?></h3>
    </body>
    </html> -->
<?php
##################################################################################################################################
    ?>

<!-- <html>
    <body>
        <h3>Please Enter Your Name:</h3>
        <form action="" method="GET">
            <input type="text" name="username">
            <input type="submit" value="Submit Name">
        </form>
        <?php
            $name=$_GET["username"];
            echo $name;
         ?>
    </body>
    </html> -->
<?php
##################################################################################################################################
  /*
   Write a PHP script to get the client IP address
  */

    // $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    // echo $ip_address;
    // echo "<br>";
    // //whether ip is from proxy
    // $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    // echo $ip_address;
    // echo "<br>";
    // //whether ip is from remote address
    // $ip_address = $_SERVER['REMOTE_ADDR'];
    // echo $ip_address;
    //$ip_address = getenv("REMOTE_ADDR") ;
    //    echo $ip_address;
    // echo "<br>";
##################################################################################################################################
    /*
        Write a simple PHP browser detection script
        Sample Output : Your User-Agent is: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36
    */  
    // echo "<pre>";
    // print_r($_SERVER['HTTP_USER_AGENT']);
    // echo "</pre>";
##################################################################################################################################
   /*
        Write a PHP script to get the current file name
    */
    // echo "<pre>";
    // echo basename(__FILE__);
    // echo "</pre>";
    //  print_r(pathinfo("elzero\assignments.php", PATHINFO_FILENAME));
##################################################################################################################################
    /**
     *  Write a PHP script,
     *  which will return the following components of the url
     *  'https://www.w3resource.com/php-exercises/php-basic-exercises.php'
     */
    // $url="https://www.w3resource.com/php-exercises/php-basic-exercises.php";
    // echo "<pre>";
    // print_r(parse_url($url));
    // echo "</pre>";
##################################################################################################################################
 /**************************
 * Write a PHP script, which changes the color of the first character of a word.
 */
    // $text="PHP Tutorial";
    // $text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
    // echo $text;
##################################################################################################################################
    /**
    * . Write a PHP script,
    *  to check whether the page is called
    *  from 'https' or 'http
    */
    // if(!empty($_SERVER['HTTPS']))
    //     echo "HTTPS Connection";
    // else 
    //     echo "HTTP Connection";
##################################################################################################################################
 /**
 * Write a PHP script to redirect a user to a different page
 */
    // header("Location:https://www.w3resource.com/");
    // exit();
##################################################################################################################################
 /**
 *  Write a simple PHP program to check that emails are valid. Go to the editor
 *  Hints : Use FILTER_VALIDATE_EMAIL filter that validates value as an e-mail address.
 */
    // $email="adham20022020@protonmail.com";
    // if(!filter_var($email,FILTER_VALIDATE_EMAIL)):
    //     echo "Invalid Email Format <br>";
    // else:
    //     echo "Valid Email <br>";
    // endif;
##################################################################################################################################
  /*
   13. Write a e PHP script to display string, values within a table. Go to the editor
   Note : Use HTML table elements into echo.
   Expected Output 
   */
    //     $a=1000;
    //     $b=1200;
    //     $c=1400;
    // echo <<< "start"
    //      <table border=1 cellspacing=0  cellpading=0>
    //         <tr><td style="color:blue"><b>Salary Of MR.A is</b> </td><td>$a$</td></tr>
    //         <tr><td style="color:blue"><b>Salary Of MR.B is</b> </td><td>$b$</td></tr>
    //         <tr><td style="color:blue"><b>Salary Of MR.C is</b> </td><td>$c$</td></tr>
    //      </table>
    // start;
##################################################################################################################################
    /**
    * Write a PHP script to display source code of a webpage (e.g. "http://www.example.com/")
    */
    // $all_lines = file('https://www.w3resource.com/');
    // echo "<pre>";
    // foreach ($all_lines as $line_num => $line)
    // {
 	// echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "\n";
    // }
    // echo "</pre>";
##################################################################################################################################
    /**
    * Write a PHP script to get last modified information of a file
    */
    // $filename="index.php";
    // echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
##################################################################################################################################
    /**
    * Write a PHP script to count number of lines in a file.
    * Note : Store a text file name into a variable and count the number of lines of text it has
    */
        // $file=basename($_SERVER['PHP_SELF']);
        // echo count(file($file));
##################################################################################################################################
    /**
    * Write a PHP script to print current PHP version
    */
    // echo 'Current PHP version : ' . phpversion();
##################################################################################################################################
 /**
 * Write a PHP script to delay the program execution for the given number of seconds.
 */
        // echo date('h:i:s')."\n";
        // sleep(5);
        // echo "<br>";
        // echo date('h:i:s')."\n";
##################################################################################################################################
 /**
 * Arithmetic operations on character variables : $d = 'A00'. Using this variable print the following numbers
 * Sample Output :
 *A01
 *A02
 *A03
 *A04
 *A05
 */
 //  $d = 'A00';
 //     while(1) {
 //         $d++;
 //         echo $d."<br>";
 //         if($d=="A05"){
 //             break;
 //         }
 //     }
##################################################################################################################################
 /*
  *Write a PHP script to get the last occurred error.
 */
    // echo @$x or die("failed");
    // echo "<pre>";
    // print_r(error_get_last());
    // echo "</pre>";
##################################################################################################################################
 /**
 *Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator * 
 */
  //    function trinary_Test($n){
  //     $r = $n > 30
  //   \  ? "greater than 30"
  //     : ($n > 20
  // \    ? "greater than 20"
  //     : ($n >10
  //  \   ? "greater than 10"
  //     : "Input a number atleast greater than 10!")); 
  //     echo $n." : ".$r."\n";
  //     }
  //     trinary_Test(32);
  //     trinary_Test(21);
  //     trinary_Test(12);
  //     trinary_Test(4);
##################################################################################################################################
 /**
 * Write a PHP script to get the full URL.
 */
 // $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 //   echo $full_url."\n";
##################################################################################################################################
 /**
  * Write a PHP script to compare the PHP version.
  */
    // if (version_compare(PHP_VERSION, '6.0.0') >= 0) {
    // echo 'I am at least PHP version 6.0.0, my version: ' . PHP_VERSION . "\n";
    // }
    // if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
    // echo 'I am at least PHP version 5.3.0, my version: ' . PHP_VERSION . "\n";
    // }
    
    // if (version_compare(PHP_VERSION, '5.0.0', '>=')) {
    // echo 'I am using PHP 5, my version: ' . PHP_VERSION . "\n";
    // }
    
    // if (version_compare(PHP_VERSION, '5.0.0', '<')) {
    // echo 'I am using PHP 4, my version: ' . PHP_VERSION . "\n";
    // }
##################################################################################################################################
 /**
  * Write a PHP script to get the name of the owner of the current PHP script.
  */
    // echo "Get Current User: ".get_current_user()."\n";
##################################################################################################################################