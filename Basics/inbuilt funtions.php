<?php #Array Sorting
// rsort();    //revese sort or decending order sort
// sort();     //ascending order sort

// $a=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
// print_r($a);
// echo "\n sort(): \n";
// sort($a); //ascending order sort
// print_r($a);
// echo "\n rsort(): \n";
// rsort($a);
// print_r($a);

// $a=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
// echo "Original array:\n";
// print_r($a);

// asort($a);
// echo "\nSorted in ascending order by value:\n";
// print_r($a);

// arsort($a);
// echo "\nSorted in descending order by value:\n";
// print_r($a);

// ksort($a);
// echo "\nSorted in ascending order by key:\n";
// print_r($a);

// krsort($a);
// echo "\nSorted in descending order by key:\n";
// print_r($a);
?>


<?php # array_merge()             // Combining 2 arrays into a single array
// $name = array("Manoj","Rahul","Aneesh");
// $marks= array("75","89","44");
//     // Method 1
//     // Method 2
// $c=array_merge($name,$marks);
// print_r($c);
?>

<?php # array_combine()             // Combining 2 arrays into an Associative array
// $name = array("Manoj","Rahul","Aneesh");
// $marks= array("75","89","44");
//     // Method 1
//     // Method 2
// $c=array_combine($name,$marks);
// print_r($c);
?>

<?php # array_chunk() //creates chunckes of array elements comverting it into multidimentional array
// $course=array("PHP","Laravel","Nodejs","HTML","CSS","Asp.net");
// $chunked_array = array_chunk($course, 3);
// print_r($chunked_array);
?>

<?php # array_count_values() function in array,counts the occurences of values and display value as key and occcuence as it's value in an associative array
// $array = array("apple", "banana", "orange", "apple", "banana", "apple");
// print_r(array_count_values($array));
?>

<?php # count() function in array, returns the number of element in the array
// $a=array("Block 33","Block 34","Block 36","B

// $xyz=array(
//     "fruits"=>array("orange","apple","grapes"),
//     "color"=>array("orange","red","green")
// );
// // echo count($xyz);
// echo count($xyz["fruits"]);
?>

<?php # array_diff()
// function in PHP compares only the values of the arrays, not their keys.
// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("e"=>"red","f"=>"green","g"=>"blue");
// $a3=array("h"=>"magenta","i"=>"seagreen","d");
// // $result=array_diff($a1,$a2);
// $result=array_diff($a1,$a2,$a3);
// print_r($result);
?>

<?php # array_flip()
// //  function takes an array and flips its keys and values. In other words, it creates a new array where the keys become the values and the values become the keys.
// // Note that if there are duplicate values in the original array, the keys for those values will be lost in the resulting array, as keys must be unique.
// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// print_r(array_flip($a1));
?>

<?php # array_intersect()
    // $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    // $a2=array("e"=>"red","f"=>"green","g"=>"blue");
    // $a3=array("red","blue");
    // print_r(array_intersect($a1,$a2,$a3));
?>

<?php # array_merge()
// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("e"=>"red","f"=>"green","g"=>"blue");
// $a3=array("h"=>"magenta","i"=>"seagreen");
// print_r(array_merge($a1,$a2,$a3));
?>

<?php # array_pop()         // Removes last element
// $a=array("red","green","blue");
// array_pop($a);
// print_r($a);
?>

<?php # array_push()        // adds new element in the last of the array
// $a=array("red","green","blue");
// array_push($a,"yellow");
// print_r($a);
?>

<?php # array_reverse() // reverse the indices along with the values
// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// print_r(array_reverse($a1));
?>

<?php # array_search()  & in_array()    // returns the key or index of that element in the array
// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"Yellow");
// echo array_search("Yellow",$a1);
// $x= in_array("Yellow",$a1);
// echo "\nin_array() value: ".$x;
?>

<?php # array_slice()
// $fruits = array("apple", "banana", "cherry", "date", "elderberry", "fig");
// $slice = array_slice($fruits, 1, 3);
// print_r($slice);
?>

<?php # array_column()
// $result = array(
//     array('name'=>'Manoj','cgpa'=>6.7,'satus'=>'pass'),
//     array('name'=>'Rahul','cgpa'=>9.8,'satus'=>'pass'),
//     array('name'=>'Amit','cgpa'=>3.2,'satus'=>'fail'),
// );
// $names = array_column($result, 'name');
// $cgpa = array_column($result, 'cgpa');
// print_r($names);
?>

<?php # array_implode() 
// $fruits = array("apple", "banana", "cherry", "date", "elderberry", "fig");
// $fruit_string = implode(", ", $fruits);
// echo $fruit_string;
?>

<?php # array_explode()
// $fruit_string = "apple,banana,cherry,date,elderberry,fig";
// $fruits = explode(", ", $fruit_string);
// print_r($fruits);
?>

<?php # array_diff_assoc()
// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("e"=>"red","f"=>"green","g"=>"blue");
// $a3=array("h"=>"magenta","i"=>"seagreen");
    ?>