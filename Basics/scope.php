<?php
# Scopes are of three types
/*
1. Local: Variable declared within a block of code is called local variables for that block of code.
2. Global: Variables defined outside of any function or block have global scope.
            They can be accessed from anywhere in the script.
            There 's also a keywords "global".
            "$GOBALS" used for global array.
3. Static


*/
?>

<?php
// $a=10;
// $b=20;
// $sum=fn()=>$GLOBALS['a'] + $GLOBALS['b'];
// echo "The sum of $a and $b is: ".$sum();
?>

<?php
// function p(){
//     static $a=10; // keep the value unchanges even in local scope
//     $b=20;
//     echo "\nBegin:\n\n".$a."   ".$b."\n";
//     $a++;
//     $b++;
//     echo $a."   ".$b."\n";
// }
// p();
// p();
?>

<?php
// // Method 1:
// function outter(){
//     $local_var="Hello";
//     $inner=function() use($local_var){
//         echo $local_var." World\n";
//     };
//     $inner();
//     echo $local_var."\n";
// }
// outter();

// // Method 2:
// function outter(){
//     $local_var="Hello";
//     function inner($local_var){
//         // global $local_var;
//         echo $local_var." World\n";
//     } inner($local_var);
//     echo $local_var."\n";
// }outter();

// // It won't access the outter vaiable on it's own
// function outter(){
//     $local_var="Hello";
//     function inner(){
//         global $local_var;
//         echo $local_var." World\n";
//     } inner();
//     echo $local_var."\n";
// }outter();

?>


