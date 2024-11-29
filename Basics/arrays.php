
<?php #Basics
/*
# We can store heterogeneous datatypes in an array in PHP.
# Types of Arrays:
Associative array: An array where each key has its own specific value.
Enumerated array: An array which uses numeric indices as it's keys. 
    Indexed array: An array with a numeric key.
Multidimentional Array: An array containing  one or more arrays within itself.
    It can be Associative as well as Enumerated arrays.
*/

#declaration
// $arr1=array("red","green","blue","yellow"); 
// $arr2=["apple","banana","grapes","orange"];
// $arr3[3]; //size fixing
// $arr3 = array_fill(0, 3, null); // Properly initialize $arr3 with 3 elements set to null
// echo count($students);s
?>

<?php #Indexed Array
// $arr1=array("red","green","blue","yellow"); 
// $arr2=["apple","banana","grapes","orange"];
// echo "Arr2: ";
// foreach($arr2 as $a){
//     echo $a." ";
// }echo "\nArr1: ";
// for($i=0;$i<count($arr1);$i++){
//     echo $arr1[$i]." ";
// }echo "\n";
?>

<?php # Associative Array
#declaration
// $color=array("c1"=>"red","c2"=>"blue","c3"=>"yellow");
// echo $color["c2"]."\n\n";

// #foreach loop
// foreach($color as $c){
//     echo $c."\n";
// } echo "\n";
// foreach($color as $key=>$val){
//     echo $key." => ".$val."\n";
// } echo "\n";

// #for loop
// // use inbuilt funcction array_keys
// for($i=0;$i<count(array_keys($color));$i++){
//     echo array_keys($color)[$i]." => ".array_values($color)[$i]."\n";
// } echo "\n";

#
?>

<?php # array_search($needle, $array) returns the  first index
// $fruits = ["apple", "banana", "orange"];
// $index = array_search("banana", $fruits); // returns 1
?>

<?php # array_search($needle, $array) returns array of all indices
// function findAllIndices($needle, $haystack) {
//     $indices = []; // Array to hold the indices
//     foreach ($haystack as $key => $value) {
//         if ($value === $needle) { // Use strict comparison if needed
//             $indices[] = $key; // Collect the index
//         }
//     }
//     return $indices; // Return the array of indices
// }

// // Example usage
// $fruits = ["apple", "banana", "orange", "banana", "kiwi"];
// $indices = findAllIndices("banana", $fruits); // returns [1, 3]

// print_r($indices);
?>

<?php # in_array($needle, $array) returns true of false for presence of needle in the given array
// $fruits = ["apple", "banana", "orange"];
// $result = in_array("banana", $fruits); // returns true

?>

<?php
// $color = array('white','green','red','blue','black');
// echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$color[2]} carpet, the {$color[1]} lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
?>

<?php
// $color = array('white','green','red','blue','black');
// // echo "<ul>";
// foreach ($color as $value) {echo "<li>$value</li>";}
// // echo "</ul>";
?>

<?php
// $students= array("Alice"=>85,"Charlie"=>92,"Eve"=>88,"Neha"=>80,"Rahul"=>70,"Atul"=>50,"Shneha"=>40,"Hina"=>75);
// $av_Score=80.6;
// foreach($students as $k=>$v){
//     // if($v>$av_Score){echo $k." => ".$v."\n";}
//     if($v>$av_Score){printf("%10s => %3.3f\n",$k,$v);}
// }
?>

<?php
// $number=[3,7,2,8,1,4,10,5];
// // Filter out even numbers
// $odd_num=[];
// foreach($number as $n){if($n%2!==0){$odd_num[]=$n;}}
// //Square  the remaining numbers
// $sq_num=[];
// foreach($odd_num as $n){$sq_num[]=$n*$n;}
// // sorting in descending order
// rsort($sq_num);
// // sum of square numbers
// $sum=0;
// foreach($sq_num as $i){$sum+=$i;}
// // print_r
// echo "Square of all odd number in descending order:\n";
// foreach($sq_num as $i){echo $i."\n";}
// // printf("Sum of all odd numbers in array: %d",$sum);
// print_r("Sum of all odd numbers in array: ");
// print_r($sum); 
?>

<?php # Multi-dimensional Array
// $result = array(
//     array("Manoj",7.8,"pass"),
//     array("Aditya",8.5,"pass"),
//     array("Anuj",4.9,"fail")
// );

# Accessing a particular element
// echo $result[2][0];

# Using for loop
// // for($row=0;$row<3;$row++){
// //     echo"<h4>Row number $row</h4>";
// //     for($col=0;$col<3;$col++){
// //         echo$result[$row][$col]."<br/>";
// //     }
// // }

# using foreach loop
// $a=1;
// foreach($result as $i){
//     // echo"<h4>Row number $a</h4>";
//     echo"\nRow number $a\n";
//     foreach($i as $j){
//         // echo $j."<br/>";
//         echo $j."\n";
//     } $a++;
// }

# To print whole array in a format 
// echo "<pre>";
// print_r($result);// used to print arrays
// echo "</pre>";


# using foreach loop with table
// echo "<table border='2px'>";
// foreach($result as $i){
//     echo"<tr>";
//     // echo"\nRow number $a\n";
//     foreach($i as $key=>$val){
//         echo "<td>".$val."</td>";
//     }echo "</tr>";
// }echo "</table";
?>


<?php
// echo "<tr>";
// echo "<th>Name</th>";
// $subjects = array_keys($student['John']); // Extract subjects from John's grades
// foreach($subjects as $subject) {
//     echo "<th>$subject</th>";
// }
// echo "<th>Average</th>"; // Column for the average
// echo "</tr>";
?>

<?php
$student=[
    "John"=>[
        "Math"=>85,
        "Science"=>90,
        "History"=>78
    ],
    "Jane"=>[
        "Math"=>92,
        "Science"=>88,
        "History"=>84
    ],
    "Alice"=>[
        "Math"=>75,
        "Science"=>80,
        "History"=>70
    ]
];
// print_r($student);  //printing array

echo "<table  border='2px'>";
echo "<tr>";
foreach($student as $key=>$val ){echo"<th>$key</th>";}
echo "<th>Average</th>";
echo"</tr>";
foreach($student as $i){
    echo "<tr>";
    
//     // echo "<th>Name</th>";
// $subjects = array_keys($student['John']); 
// foreach($subjects as $subject) {
//     echo "<th>$subject</th>";
// }
// echo "<th>Average</th>";

    echo "</tr><tr>";

    $av=0.0;
    foreach($i as $key=>$val){
        echo"<td>$val</td>";
        $av+=$val;
    }  $av/=2; 
    echo"<td>$av</td>";
    echo "</tr>";
}echo"</table>";
?>
