<!-- Command /line Interface in PHP -->
<?php
// $fname = readline("Enter first name:\n");
// $lname = readline("Enter last name:\n");
// echo "Hello, $fname, $lname!!!";
?>

<?php
// $a=readline("a: ") ?: 0;
// $b=readline("b: ") ?: 0;
// $c=readline("c: ") ?: 1;
// $d=readline("d: ") ?: 1;
// $e=readline("e: ") ?: 0;
// echo "Result: ".($a+$b)*$c/$d-$e;
?>

<?php
// $y=readline("y: ") ?? 0;
// $y+=1;
// $y-=1;
// $y*=1;
// $y/=1;
// $y%=1;
// echo "\nY: ".$y;
?>

<?php
// $x=2;
// echo "X++: ".$x++;  // 2
// echo "\nX: ".$x;    // 3
// echo "\n++X: ".$x;  // 4
// echo "\nX: ".$x;    // 4
// echo "\nX--: ".$x--;// 4
// echo "\nX: ".$x;    // 3
// echo "\n--X: ".$x;  // 2
?>

<?php
// $n1=$n2=$n3=$in;
// $in=readline("Enter a number: ");
// echo $in;
?>

<?php
// $username;
// echo $username===null? "Guest user" : 'Welcome $username';
?>

<?php
// $age=readline("Enter age: ");
// $nationality=readline("Enter nationality: ");
// $eligible = ($nationality==="Indian")?(($age>=18)? "Eligible": "Not Eligible"):"Not Eligible";
// echo "Person is ".$eligible;
?>

<?php
$x1=readline("x1: ");
$x2=readline("x2: ");
$x3=readline("x3: ");
// $ans=$x1;
echo "Result: ".$x3>=($x1>=$x2?$x1:$x2)?$x3:($x1>=$x2?$x1:$x2);
;
?>