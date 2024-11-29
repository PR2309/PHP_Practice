<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PHP Learning</title>
</head>
<body>
    <!-- <h1>Heading A</h1><hr/> -->
    <?php // echo"<h1>PHP Text A.<hr/></h1>"; ?>
    <!-- <h1>Heading B</h1><hr/> -->
    <?php /// echo"<h1>PHP Text 2</h1>"; ?>

    <?php
        // echo "Hello";
        // echo "World"
    ?>
    <style>
        .c{color:aqua;}
    </style>
    <?php // Using HTML attributes and CSS with PHP
        // echo "<p class=\"c\" style=\"background-color:red;\">Hello</p>"
    ?>

<!-- Using PHP and HTML in between to avoid following string manipulation due to php code -->
    <?php // if(true) {?>
    <!-- <h1>Heading <?php // echo "PHP text within h1 tag text</p>"; ?>1</h1> -->
    <?php // }?>
    <?php // if(false) {?>
    <!-- <h1>Heading 2</h1> -->
    <?php // } ?>

</body>
</html>

<?PHP // Notes
/* Basics:
Static Website: Whose data or layout won't change according to user eg. W3schools, Wikipedia,etc 
Dynamic Website: Whose data or layout will change according to user 


~> Steps to write a PHP code: 
    Got to: In C drive / XAMPP / htdocs / 
    Create new Project folder: eg. PHPfolder
    Open in code editor
    Open in code editor


*~> PHP stands for Hypertext Preprocessors
*~> PHP- Personal Home Page
*~> PHP is a server side language
*~> PHP is an interpreter language
        it's interpreted in the server and result is sent back to the client in html.
*~> PHP supports both Object Oriented as well as Procedural Oriented Programmings.
~> Extension for PHP is .PHP
~> About the logo:   ele"PHP"ant.
~> PHP is an open source language.
~> PHP is portable: It can run on any platform.
~> PHP is faster than other scriting languages
*~> PHP Keyword is not case sensitive, but the variables are case sensitive.
~> Written mostly or always inside html.
~> It can be embedded into HTML so easily.
*~> PHP Code is executed on the server and then retirned to the client, meaning code is hidden.
~> PHP can be written in 2 ways:
    1) Embedding inside HTML Code.
    2) Using a separate PHP Code in .php file.
    Note: It can also be used as mixed coding in segments with html and php code sandwiched.
*~> PHP code can use css normally with the code of css written in string or attribute linked to it.
~> PHP can be used with JavaScript as well.

~>PHP parses a file, it looks for opeing and closing tags.

*~> 3 things are needed in PC to run PHP in my device:
    1. PHP Engine
    2. Apache Web server
    3. Database Server
    
    OR A Package (Servers like):
        XAMPP Server, LAMP, VAMP, LIMP, Docker(Not Server), etc.
        We generally use XAMPP as it's easy to setup and used widely.
    Editor is required as, eg. vs code, notepad++, atom, etc.

    Note: These servers help us to run the php code inside our device without uploading it on internet.

~> To write the code:
    1. Go to: xammp folder (in c drive generally)
    2. Go to: xampp/htdocs
    3. Create a Project folder: eg. PHP_Code_Project
    4. Open it in editor.
    5. Create a .php file and start coding in it.
    Note: HTML can also be written inside .php file so it's better to write code in .php file 

*~> Syntax:
    Opening PHP Tag:    <?
    PHP Tag:            php
    Code:               ...     eg. echo"Hello World!!!";
    End of statement:   ;
        Note: Semicolon ";" isn't required for the last line before closing tag "?>".
    Closing PHP Tag:    ?>
        Note: The closing tag "?>" of a PHP block at the end of a file is optional, and in some cases omitting it is helpful when using include or require, so unwanted whitespace will not occur at the end of files, and you will still be able to add headers to the response later.
        Note: Closing tag can only be ommited in a pure php file (not inside HTML code as it will treat closing tags of html as php code and throw error).
        Note: Also while omitting closing tage we must add semicolon even in the last statement as there's no closing tag to identify the end of statement. 

    eg.:  <?php echo"Hello World!!!";?>

*~> To run the code:
    1. Go to XAMPP control panel
    2. Turn on Apache and MySQL
    3. Go to localhost type localhost in the browser (no port)
    4. Navigate to the file from localhost browser
    OR write localhost/path_of_the_project_folder_or_code_file/



~> it uses port number 80
*~> apache is needed to be turned on to run php
-~> apache needs to be stopped in order to make the localhost work for other things.

*/

/* Frequent Questions:
~> Q. What are PHP Expressions?
    In PHP, expressions are a combination of values, variables, operators, and functions that can be evaluated to produce a single value.

~> Q. What are Static Expressions?
    Static expressions in PHP refer to expressions that are evaluated at compile time, meaning their values are determined when the code is compiled rather than at runtime. These expressions are typically composed of constant values, literals, and variables that do not change during the execution of the script.

~> Q. What are Dynamic Expressions?
    Dynamic expressions in PHP are expressions that are evaluated at runtime, meaning their values can change based on the program's state, user input, or other variables. Unlike static expressions, which can be determined at compile time, dynamic expressions rely on values that may vary during the execution of the script.

~> Q. Is PHP dead?
    PHP is used by about 78% of all websites,(meanwhile python is about 2%).
    It's popular as other languages like python can be used in other work too expect for server site programming.

~> Q. Popular Websites using PHP?
    FaceBook, WikiPedia, Canva, WordPress (CMS).

~> Q. Are ther any Updates comming for PHP?
    Yes, PHP is constantly improving and receiving updates.

~> Q. Why to learn PHP when we an use JavaScript?
    PHP is used for server side programming, while JavaScript is used for client side programming.
    JavaScript can't and shouldn't be able to access data in the database, as it can give access to any browser user to manipulate the data in data base making it vulnerable to attackers to breach security and misuse the data. 

~> Q. How to Learn PHP?
    To learn PHP, it can be divided into 3 parts:
        1. PHP Language: Writting the progeam in PHP.
        2. Databases: Manipulate databases.
        3. Security: Protect the website and data using PHP.

~> Q. What is LARAVEL?
    It's a Framwork of PHP.
    It helps web developers build modern web applications.
    Laravel combines the best of other web frameworks, including Ruby on Rails, ASP.NET MVC, and Sinatra

*/
?>

<?php # Comments:
        # Single-line Comments
        // Single-line Comments
        /* Multi-line Comments */
?> 

<?php # Printing/Output Ways:
    /* echo "Hello World\n"; 
    // echo is faster than print
    // print uses . only for concatenation
    // \n only makes a space not a new line as it works as HTML format
    // echo: Output text to the screen
    // It prints the string within p tag by default (if no tags are added).
    echo "abc","mno"."pqr<br/>";
    echo "<h1>w","&nbsp;","xyz<h1/><hr/>";

    // print: Output text to the screen
    print $var_name;

    // The print_r() function prints the information about a variable in a more human-readable way.
    // Syntax: print_r(variable,return);
        // variable-> variable to be printed
        // return -> (optional) true: (it'll return value) OR false: (it'll print value)
    $a = array("red", "green", "blue");
    print_r($a);
    echo "<br>";
    $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    print_r($b,);
    echo "<br/><br/>";
    print_r(is_numeric(2),false);
    $x = print_r(is_numeric(2),true);
    echo "<br/>x: ".$x;
    echo"<hr/>";
    */
?>

<?php  # Variable declaration:
    /*  $variable_name = value;
        // variable_names are case sensitive
        // Naming Conventions:  1) Starts with $
                                2) it should only contain a_z or A-Z or 0-9 or _;
                                3) don't start with a number
        // It's better to keep the variable name's first letter small (not capital) to avoid confusion among global constants and local variables .i.e, in camel-case.
    
    /*      STATIC $count = 0;
            $count++;
            print $count."<br/>";
    */
?>

<?php # Dynamic Variable & Static Variable:     
    /* # Dynamic variables:
            $varName="color";
            // $$varName="blue"; // Method 1
            ${$varName}="blue"; // Method 2  // {$varName}=color
            // echo "$varName: ",$varName."<br>";
            echo "$ { $ varName } = $ $ varName = $ color: ",$color."<br/>";
    */
    echo "" ;
    /* # Static Variable:
        $a = 0;  // Method 1
        // static $a = 0;  // Method 2
        echo $a;
        $a++;
        //static $int = sqrt(121);  // wrong  (as it is a function.i.e, dynamic expression)

    */
?>
<!-- Doubt
<?php # Variable Scopes:
    //global keyword: used to access the variable at global level
    // $a = 1;
    // $b = 2;
    // $c = 3;  // global scope variable
    // function Sum(){
    //     echo $c;    // reference to local scope variable
    //     global $a, $b;
    //     $b = $a + $b;} 
    // Sum();
    // echo $b;

    // use the special PHP-defined $GLOBALS array
    // $a = 1;
    // $b = 2;
    // function Sum(){$GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];} 
    // Sum();
    // echo $b;

    // to access Superglobals
    // function test_superglobal(){echo $_POST['name'];}

?>
-->

<?php # Defining constants:
    /*  Method 1:
            define("name",value);
            // it make the variable global
            // use name not $name while printing
        Method 2:
            const $name = value;
    */
?>

<?php

?>

<?php # Datatypes & Identifier Functions for Datatypes:
    /*  // Scalar Datatypes: Which contain only one value in it. 
            // 1. Integer: Whole number, positive or negative, without a decimal point.         //default value: 0
            // 2. Float: decimal number, positive or negative or zero, with a decimal point.    //default value: 0
            // 3. String: sequence of characters, enclosed in quotes.                           //default value: ""
            // 4. Boolean: true (or 1 from PHP only) or false (or 0 from PHP only)              //default value: false(0)
        // Non-Scaler Datatypes: Which contain more than one value in it.
        // There are 2 type of non-scaler datatypes: Compund and  Special
        // Compund Datatypes: Made up of scalar and possibly other compound data types. 
            // 1. Array: collection of values(may be same may be different), enclosed in square brackets.   //default value: []
            // 2. Object: collection of values, enclosed in curly brackets.                                 //default value: null
            // 3. Callables: 
            // 4. Iterables: An iterable is an object that can be iterated (looped) over, such as an array or an object.
        // Special Datatypes:
            // 1. Resource: special variable that holds a connection to a resource external to PHP,
            // 2. NULL: a special variable that has a value of "NULL"


        // is_scaler($value): 
            It is used to print the  1 (true) or 0 (false) to check if the value os caler or not.
        
        // is_bool($value):
            Returns 1 (true) if value is a bool value, else nothing.
        // is_int($value):
            Returns 1 (true) if value is a integer value, else nothing.
        // is_float($value):
            Returns 1 (true) if value is a float value, else nothing.
        // is_string($value):
            Returns 1 (true) if value is a string value, else nothing.

        // is_numeric($value):
            Returns 1 (true) if value is a numeric string or a number, else nothing.
        // is_real($value)
            Returns 1 (true) if value is a real number (not an imaginary number), else nothing.
            Also considered as an alias of is_float().

        // is_array($value):
            Returns 1 (true) if value is an array, else nothing.
        // is_object($value):
            Returns 1 (true) if value is an object, else nothing.
        // is_iterable($value):
            Returns 1 (true) if value is an iterable value, else nothing.
        // is_resource($value):
            Returns 1 (true) if value is a resource value, else nothing.
        // is_null($value): 
            Returns 1 (true) if value is a NULL value, else nothing.
        // is_callable($value, $syntax_only, $callable_name):
            $value is the value being checked.
            $syntax_only parameter is an optional boolean flag that if set true will only check if $value is properly structured to be used as a callback.
            $callable_name parameter is optional, and if included, will be set to the name of the callable function or method referred to by $value
            Return 1 (true) if $value is a callable value, else nothing.

        // var_dump($value): It is used to print the data type and value of a variable.
        // gettype($value): It returns a human readable string representing the data type of an expression.

        // just like JavaScript we don't need to mention the datatype, as it will automatically analyze assign it like in Py and Js 
    *//*
        // $default1; // it's better to asssign somthinng to variablr not just initialize it to reduce chamces of getting errors
        // $$default2 ?:0;
        // $var_name="abc";
        // $int1 = 4539; $int2=-39372; $int3 = 0;
        // $float1 = 3.14159; $float2 = 0.0; $float3=-5.42;
        // $string1 = "Hello World_0"; $string2 = 'Hello World_#'; $string3="123";
        // $boolean1 = true; $boolean2 = false;
        //     $boolean3 = 1; $boolean4=0; //int not boolean while assigning
        // $null1 = NULL; $null2 = null;

        // echo "defaultly assigneed value to any varable by itsellf: ".gettype($default1)."&nbsp;".var_dump($default1)."&nbsp;".$default1."<hr/>";
        // echo "defaultly assigneed valu to any varable by user: ".$default2."<hr/>";

        // echo "is_scalar(): ".is_scalar($int1),"<hr/>";  // returns a boolean value whether the variable is scaler or not
        // echo "is_int(): ".is_int($int1),"&nbsp;". is_int($int2),"&nbsp;".is_int($int3),"<hr/>";
        // echo "is_float(): ".is_float($float1),"&nbsp;". is_float($float2),"&nbsp;".is_float($float3),"<hr/>";
        // echo "is_string(): ".is_string($string1),"&nbsp;". is_string($string2),"&nbsp;".is_string($string3),"<hr/>";
        // echo "is_bool(): ".is_bool($boolean1),"&nbsp;". is_bool($boolean2),"&nbsp;";
        // echo "<br/>false cases return nothing.".is_bool($boolean3),"&nbsp;".is_bool($boolean4),"<hr/>";
        // echo "is_null(): ".is_null($null1),"&nbsp;". is_null($null2),"<hr/>";

        // echo "<br/><br/>";
        // echo "is_numeric(): ".is_numeric($int3),"&nbsp;".is_numeric($float3),"&nbsp;".is_numeric($boolean3),"&nbsp;".is_numeric($string3),"<hr/>";
        // echo "is_real(): ".is_real($int3),"&nbsp;".is_real($float3),"&nbsp;".is_real($boolean3),"&nbsp;".is_real($string3),"<hr/>";

        // //Non-Scalar

        // $arr1=array("abc",1,"xyz");  // array creation (Method 1)
        // $arr2=["abc",1,"xyz"];  // array creation (Method 2) in PHP-5 and above only
        // $arr3[3]; //size fixing   
        // echo "<br/>".is_array($arr1),"&nbsp;".is_array($arr2),"hr/>";

        // // $obj= new Car();    // Car is a class
        // // echo "<br/>".is_object($obj),"hr/>";

        // echo "<br/><br/>"."var_dump(): ";
        // var_dump($var_name);  // tells the datatype of the variable
        // echo "<br/><br/>"."gettype(): ";
        // echo gettype($var_name),"<hr/>";

        // // echo "NULL: ".print_R(is_scalar(NULL),false),"<hr/>";
 */
?>

<?php # Ctype Functions:
    // ctype_alnum(): Returns 1 (true) if all the characters in the variable strin are alpha-numeric, else nothing.
    // ctype_alpha(): Returns 1 (true) if all the characters in the variable string are alphabets, else nothing.
    // ctype_upper(): Returns 1 (true) for uppercase character(s), else nothing.
    // ctype_lower(): Returns 1 (true) for lowercase character(s), else nothing.
    // ctype_digit(): Returns 1 (true) for numeric character(s), else nothing.
    // ctype_xdigit(): Returns 1 (true) for character(s) representing a hexadecimal digit, else nothing.
    // ctype_space(): Returns 1 (true) for whitespace character(s), else nothing.
    // ctype_cntrl(): Returns 1 (true) for control characters(eg. line feed,tab,escape, etc.), else nothing.
    // ctype_print(): Returns 1 (true) for printable character(s), else nothing.
    // ctype_punct(): Returns 1 (true) for any printable character which is not whitespace or an alphanumeric character, else nothing.
    // ctype_graph(): Returns 1 (true) if all of the characters in the provided string, text, creates visible output, else nothing.
?>

<?php # Escape Sequences:
 /* " ": an ordinary space.
    "\n": a new line.
    "\t": a tab.
    "\r": a carriage return.
    "\b": a backspace.
    "\f": a form feed.
    "\v": a vertical tab.
    "\a": a bell.
    "\0": the Nul-byte
*/
?>

<?php # Operators:
/// Operations: an action that is carried out to accomplish a given task.
             // There are five basic types of computer operations:
                    //  (i) inputting, (ii) processing, (iii) outputting, (iv) storing and (v) controlling.
// Operators: a set of symbols used to perform some operation on any data.
// Operants: data on which operations get performed.
// Depending on the operants

// Arithmetic Operators:
// + (Addition)
// - (Subtraction)
// * (Multiplication)
// / (Division)
// % (Modulus)
// +=

/*
*//************************************************* *//*
// $fruit ="apple";
// $a = ($fruit ?? 'apple');

// $day = $day ?: "a"; // sets a default value for $day if it's empty or null
*/
?>

<?php # Control Structures:: Conditional Statements: 
    # ~> If-Else Statements: 
    /* // Syntax:
    if(condition){
        // code
    }
    elseif(condition){
        // code
    }
    else{
        // code
    }*/
    // $condition=true;
    // $condition0=false;
    // if($condition0) {echo"1st If condition true<br/><hr/>";}
    // elseif($condition) {echo"1st Elseif condition true<br/><hr/>";}
    // else{echo"1st Else condition is true";}
    // if($condition) {echo"2nd If condition true<br/><hr/>";}

    # ~> Switch case Statements:
    /* //It’s important to end each case block with a break statement, or the code will continue to the next case block.
    // We can use || for multiple expressions to execute same case.
    // We can use && for checking multiple expressions for executing a case.
    // Syntax:
    switch (expression) {
        case value0 || value1:
            // Code to be executed if expression matches value1
            break;
        case value2 && true:
            // Code to be executed if expression matches value2
            break;
        ...
        default:
            // Code to be executed if expression does not match any of the cases
    }
    */
    
    
    // $day = "Tuesday";
    // switch ("a") {
    //     case ("Monday" || "Tuesday") && false:
    //         echo "Today is Monday.";
    //         break;
    //     case "Tuesday_" || "Tuesday":
    //         echo "Today is Tuesday.";
    //         break;
    //     case "Wednesday":
    //         echo "Today is Wednesday.";
    //         break;
    //     default:
    //         echo "Today is a different day.";
    //     case "a":       // this case after default case won't be interpreted and the first valid case will be executed
    //         echo "default 2";
    // }
?>


<?php #Goto Statements
# goto statements lables should only be used at end with exit to end code with precision
// $x=readline("anything or it'll tak 0 as input and goto will execute: ")?:0;
// if($x==0){goto result;}
// echo"abc";
// exit;
// result: echo "goto is working"; exit; // exit stops the furtur execution of program 
// lable2: 
//    echo"lable 2 => line 1";
//    echo"lable 2 => line 2";
?>

<?php # Command line Input Handling
# We can use readline() function to get input from the user.
# The readline() function returns a string containing the user's input.
# We can use the ?: operator to provide a default value if the user enters nothing.
# The ?: operator is a shorthand for the ternary operator.
# we can also take command line parameters as input
# we can use $argv variable to get the command line parameters
# $argv is an array of strings where each string is a command line parameter
# $argc variable to get the number of command line parameters
# we can use $argv[0] to get the name of the script
# we can use $argv[1] to get the first command line parameter
# we can use $argv[2] to get the second command line parameter
   # and so on...
// Command-Line Arguments in PHP
// $argv[0]: The name of the script.
// $argv[1]: The first command-line argument.
// $argv[2]: The second command-line argument, and so on.


?>

<?php # Strings
// $s=readline("Enter input string: ")?:$argv[1];
// echo "Original String: $s\n";
// $s3=strrev($s);  // to revesethe string
// echo "Reversed String: $s3\n";
// $s1=str_split($s); // to spit it into arrays of srting type characters
// echo "$s1[0]\t".var_dump($s1[1])."\n";
// $s2=implode(".", $s1);
// echo "$s2\n";

// $a=str_replace( search: ".", replace: "_", subject: $s); # Replaces . with _ in $s
?>