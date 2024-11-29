<?php
// $a = "Hello World";
// print_r(explode(" ",$a));
// echo "\n\n";
// print_r(explode(" ",$a,2));
?>

<?php # Password generator
// $s1="Secure";
// $s2="Password";
// $s3="Generator";
// $P=strtoupper("$".substr($s1,1,2).substr($s2,0,2)."$".substr($s3,0,3));
// echo "Password is: $P\nLength is: ".strlen($P);

// str_len()

?>


<?php # implode() and explode() in Indexed Array notation
// Separator: You must specify a separator. There is no default value. If you do not provide a separator, PHP will throw an error.

// // Indexed array
// $fruits = ['apple', 'banana', 'cherry'];

// // Using implode
// // it joins the elemets of an array(2nd parameter) with embedding a seperator(1st parameter) between them 
// $fruitString = implode(", ", $fruits);
// echo $fruitString; // Output: apple, banana, cherry

// // Using explode
// // it sperates a string into an array(2nd parameter) of elements where ever the seperator(1st parameter) is present in the string
// $newFruits = explode(", ", $fruitString);
// print_r($newFruits); // Output: Array ( [0] => apple [1] => banana [2] => cherry )
?>

<?php # implode() and explode() in Associative Array notation
// Note: When using implode on an associative array, only the values are joined.
// To explode back, you would need to handle the keys separately or use a different approach.

// $person = [
//     'name' => 'John',
//     'age' => 30,
//     'city' => 'New York'
// ];

// $personString = implode(", ", $person);
// echo $personString; // Output: John, 30, New York

?>

<?php # for Multi dimensional Associative array notation
// // Multidimensional array
// $multiArray = [
//     ['name' => 'Alice', 'age' => 25],
//     ['name' => 'Bob', 'age' => 30],
// ];

// // Convert multidimensional array to string
// $multiString = '';
// foreach ($multiArray as $item) {
//     $multiString .= implode(", ", $item) . "; "; // Join each inner array
// }
// echo $multiString; // Output: Alice, 25; Bob, 30; 

// // To explode back, you would need to split the string and then further process each part.
// $explodedArray = explode("; ", trim($multiString, "; "));
// $finalArray = [];
// foreach ($explodedArray as $entry) {
//     list($name, $age) = explode(", ", $entry);
//     $finalArray[] = ['name' => $name, 'age' => $age];
// }
// print_r($finalArray);
?>