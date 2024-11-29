<?php # USer defined functions
// function test() : string{
//     return "Hello, World!";
// }echo test();

?>

<?php # Arguments passing & Default Parameters
// function test($name="joe",$age=0) : string{
//     return "Hello, World! from $name who is $age years old.";
// }
// $name="Alex";
// echo test($name);
?>

<?php # Pass by Value
// function test($name="joe",$age=0) : string{
//     $name="X";
//     return "Hello, World! from $name who is $age years old.\n";
// }
// $name="Alex";
// echo $name."\n";
// echo test($name);
// echo $name;
?>
<?php # Pass by Reference
// function test(&$name="joe",$age=0) : string{
//     $name="X";
//     return "Hello, World! from $name who is $age years old.\n";
// }
// $name="Alex";
// echo $name."\n";
// echo test($name);
// echo $name;
?>
