<?php
$result= match(2){
    1,3,5=>"variable is equal to odd number ",
    2,4,6=>"variable is equal to even number",
    default => "none matched"
};
echo $result;

switch(2){
    case 1:
    case 3:
    case 5:
        echo "var equals 1,3,5";
        break;
    case 2:
    case 4:
    case 6:
        echo "var equals 2,4,6";
        break;
    default:
    echo "none matched";
}

// What is the purpose of using a reference (&) in a foreach loop? How does it change the behavior of the loop?
// The purpose of using a reference (&) in a foreach loop is to allow the loop to modify the values actully, but wihtout it foreach loop jusr work on copies of the alues keeping the actula values unchanged. 
?>
