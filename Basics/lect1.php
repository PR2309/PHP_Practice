<?php 
echo "<h1>Namaste","<hr>"." Duniyaa!!</h1>";
echo "<h2>Welcome"." to <s>Engineering</s>"." Death"."</h2>";
echo phpversion();




// it uses port number 80
// apache is neede to be turned on to run php
// apache needs to be stopped in order to make the localhost work for other things.

/* Syntax for variable declaration:
    $variable_name = value;
    // variable_names are case sensitive
    // Naming Conventions:   1) Starts with $
                             2) it should only contain a_z or A-Z or 0-9 or _;
                             3) don't start with a number
*/

/* Defining constants:
    Method 1:
        define("name",value);
        // it make the variable global

        // use name not $name while printing
    Method 2:
        const $name = value;
*/

/* Datatypes:
    Integer
    Float
    String
    Booleans
    Array
    Object
    NULL

    // just like JavaScript we don't need to mention the datatype, as it will automatically analyze assign it like in Py and Js 

    var_dump($var_name);  // tells the datatype of the variable

*/
echo "<br><br><hr>";
?>

<?php
$greeting = "Hello";
$name= "Putin";
echo $greeting.",&nbsp;".$name;
echo "<br><br><hr>";
?>


<?php
$number = 10;
echo ((($number*2)-5)+3);
echo "<br><br><hr>";
?>

<?php
//dynamic variables:
$varName="color";
// $$varName="blue"; // Method 1
${$varName}="blue"; // Method 2  // {$varName}=color
// echo "$varName: ",$varName."<br>";
echo "$ { $ varName } = $ $ varName = $ color: ",$color."<br/>";
echo "<br><br><hr>";
?>

<?php
define("Pi",3.141);
$r=1000;
echo Pi*$r*$r;
echo "<br><br><hr>";
?>

<?php
$a=10;$b=5;
$temp=$a;
$a=$b;
$b=$temp;
echo $a." ".$b;
echo "<br><br><hr>";
?>

<!-- Doubt

Q What are dynamic and static expressions in PHP?

-->