<?php # Question 1: Binary To Decimal
   // Using Number
// $b=readline("Enter Binary Number: ");
// $d=0;
// $temp=$b;
// $base=1;
// while($temp>0){
//     $d+=($temp%10)*$base;
//     $base*=2;
//     $temp=(int)($temp/10);
// }
// echo "Decimal Number for the binary number $b = $d";
?>

<?php # Question 2: Decimal To Binary
    // Using String
// $d=readline("Enter Decimal Number: ");
// $b="";
// $temp=$d;
// if($d==0){echo 0;}
// while($temp>0){
//     $b=($temp%2==0)?"0".$b:"1".$b;
//     $temp=(int)($temp/2);
//     // $base*=10;
// } echo "Binary Number for Decimal $d = $b";
    // Using Number
// $d=readline("Enter Decimal Number: ");
// $b=0;
// $temp=$d;
// $i=1;
// if($temp==0){goto x;}
// while($temp>0){
//     $b+=($temp%2)*$i;
//     $temp=(int)$temp/2;
//     $i*=10;
// }
// x: echo "Binary Number for Decimal Number: $d = $b";
?>

<?php # Question 3: Decimal To Octal
   // Using  String
//    $d=(int)readline("Enter Decimal Number: ");
//    $o="";
//    $temp=$d;
//    if($temp==0){$o="0";exit;}
//    while($temp>0){
//        $o=($temp%8).$o;
//        $temp/=8;
//    }echo "Octal Number: " . ltrim($o, '0') . "\n";

   // Using Integer
//    $d=(int)readline("Enter Decimal Number: ");
//    $o=0;
//    $temp=$d;
//    $i=1;
//    if($d==0){goto x;}
//    while($temp>0){
//       $o=$temp%8*$i+$o;
//       $temp=(int)($temp/8);
//       $i*=10;
//    } 
//    x: echo "Octal Number for Decimal Number $d: $o\n";
?>

<?php # Question 4: Octal to Decimal
    // Using Number
// $o=readline("Enter Octal Number: ") ?: (int)$argv[1];
// $d=0;
// $temp=$o;
// $base=1;
// if($o==0){goto x;}
// while($temp>0){
//     $d+=($temp%10)*$base;
//     $temp=(int)$temp/10;
//     $base*=8;
// }
// x: echo "Decimal Number for Octal Number $o = $d\n";
?>

<?php # Question 5: HexaDecimal to Decimal (Incomplete)
// $h=readline("Enter HexaDecimal numer: ")?:(int)$argv[1];
// $d=0;
// $base=1;
// $temp=$h;
// if($h==0){goto x;}
// while($temp>0){
//     $d+=($temp%16)*$base;
//     $temp=(int)$temp/16;
//     $base*=10;
// }
// x:echo"Decimal Number of HexaDecimal $h = $d\n";
?>

<?php # Question 6: Decimal to HexaDecimal (Incomplete)
?>

<?php # Question 7: Calculate power Using pow() function
// (float) $b=readline("Enter base: ")?:(float)$argv[1];
// (float) $p=readline("Enter base: ")?:(float)$argv[2];
// echo "$b Raised to power $p = ".pow($b,exponent: $p)."\n";
// $temp=1;
// for($i=0;$i<$p;$i++){$temp*=$b;}
// echo "$b Raised to power $p = ".pow($b,exponent: $p)."\n";
?>

<?php # Question 8: Copy String With and Without Using strcpy()
// $s=readline("Enter input string: ")?:$argv[1];
// $scpy=$s;
// echo "Original String: $s\nCopied String: $scpy\n";
?>

<?php # Question 9: Check Whether a Character is an Alphabet or not
// $a=readline("Enter character to check: ")?:$argv[1];
// echo $a.((ctype_alpha($a))?" is an Alphabet":" is not an Alphabet");
?> 

<?php # Question 10: Sum of Natural Numbers Using while Loop
// $n=readline("Enter the limit: ")?:(int)$argv[1];
// $i=1;
// $sum=0;
// while($i<=$n){$sum+=$i;$i++;}
// echo "Sum of all Natural Numbers upto $n = ".$sum;
?>

<?php # Question 11: Find Missing Numbers in Array (Incomplete)
?>

<?php #Question 12: Print all Non Repeated Elements in an Array (Incomplete)
?>

<?php #Question 13: Find Matrix Multiplication (Incomplete)
?>

<?php # Question 14: Simple Calculator using switch Statement
// $num1=readline("Enter first number: ")?:(float)$argv[1];
// $num2=readline("Enter second number: ")?:(float)$argv[3];
// $op=readline("Enter oper number: ")?:$argv[2];
// switch($op){
//     case "+": echo "$num1 + $num2 = ".$num1+$num2;break;
//     case '-': echo "$num1 - $num2 = ".$num1-$num2;break;
//     case '*': echo "$num1 * $num2 = ".$num1*$num2;break;
//     case '/': echo "$num1 / $num2 = ".$num1/$num2;break;
//     case '%': echo "$num1 % $num2 = ".$num1%$num2;break;
//     case '**': echo "$num1 ** $num2 = ".pow($num1,$num2);break;
//     default: echo "Ente valid values.";break;
// }
?>

<?php # Question 14: Find Determinant of a Matrix
// $mat2x2= function(array $m){return ($m[0][0]*$m[1][1])-($m[0][1]*$m[1][0]);};
// $mat3x3=function(array $m){return (
//     $m[0][0]*($m[1][1]*$m[2][2]-$m[1][2]*$m[2][1])-
//     $m[0][1]*($m[1][0]*$m[2][2]-$m[2][0]*$m[1][2])+
//     $m[0][2]*($m[1][0]*$m[2][1]-$m[2][0]*$m[1][1])
// );};
// $size=intval(readline("Enter size of matrix: "));
// $m=array();
// for($i=0;$i<$size;$i++){
//     $m[$i]=array();
//     for($j=0;$j<$size;$j++){$m[$i][$j]=intval(readline());}
// } 
// $det=0;
// switch($size){
//     case 1: $det=$m[0][0];break;
//     case 2: $det=$mat2x2($m);break;
//     case 3: $det=$mat3x3($m);break;
//     default: echo "Invalid matrix\n";exit();
// } echo "Determinant of matrix is: $det\n";
?>

<?php # Question 15: Display Inverted half pyramid of numbers (Incomplete)
?>

<?php # Question 16: Display Inverted full pyramid of stars(“*”) (Incomplete)
?>

<?php # Question 17: Display Half Pyramid of Alphabets (Incomplete)
?>

<?php # Question 18: Display Inverted half pyramid of stars(“*”) (Incomplete)
?>

<?php # Question 19: Find the Frequency of a Character (Incomplete)
?>

<?php # Question 20: Calculate Length of String with and without Using strlen() Function
// $s=(readline("Enter the string: "));
// $len=0;
// // $len=strlen($s);
// // foreach(str_split($s) as $i){$len++;}
// // for($len=0;$s[$len]!="";$len++){}
// echo "length of the string is = $len\n";
?>

<?php # Question 21: Swap Elements Using Call by Reference
// function swap(&$a,&$b){$temp=$a;$a=$b;$b=$temp;}
// $a=readline("Enter Element 1: ");
// $b=readline("Enter Element 2: ");
// echo "a = $a, b = $b\n";
// swap($a,$b);
// echo "a = $a, b = $b\n";
?>

<?php # Question 22: Check Vowel or consonant
// $a=readline("Enter the character: ");
// if(ctype_digit($a)){echo "It's a digit";}
// else if(ctype_alpha($a)){
//     if(str_contains("aeiouAEIOU",$a)){echo "It's a Vowel";}
//     else{echo "It's a consonant";}
// } else{echo "It's a special character";}
?>

<?php # Question 23:  Find the Roots of a Linear Equation with (Incomplete)
?>

<?php # Question 24:  Find the Roots of a Quadratic Equation (Incomplete)
?>

<?php # Question 25: Generate Multiplication Table
// // Single Multiplication Table
// $a=readline("Enter the number: ");
// for($i=1;$i<=10;$i++){printf("%2d x %2d = %3d\n",$a,$i,$a*$i);}
// // Multi Multiplication Table
// $limit=readline("Enter the limit: ");
// for($i=1;$i<=10;$i++){
//     for($j=1;$j<=$limit;$j++){
//         printf("%3d x %2d = %3d\t\t",$i,$j,$i*$j);
//     } echo "\n";
// }
?>

<?php # Question 26: Display Fibonacci Sequence
// $limit=readline("Enter the limit: ");
// $a0=0;
// $a1=1;
// echo "Fibbonacci Sequence till $limit terms is: ";
// if($limit==0){exit;}
// else if($limit==1){echo $a0;exit;}
// else if($limit>=2){
//     echo $a0.", ".$a1;
//     for($i=2;$i<$limit;$i++){
//         echo ", ".$a0+$a1;
//         $a0=$a1;
//         $a1=$a0+$a1;
//     }
// }
?>

<?php # Question 27: Print Lowercase/Uppercase alphabets (Incomplete)
?>

<?php # Question 28: Print Armstrong Numbers Between Two Integers (Incomplete)
// $a=readline("Enter the Upper limit: ");
// $b=readline("Enter the Lower limit: ");
// echo " ";
?>

<?php # Question 29: Print Prime Numbers Between Two Integers (Incomplete)
?>

<?php # Question 30: Find the Transpose of a Matrix (Incomplete)
?>

<?php # Question 31: Swap Elements (Incomplete)
?>

<?php # Question 32: Sum of Natural Numbers Using Function
// function summision($limit){
//     $i=1;
//     $total=0;
//     while($i<=$limit){$total+=$i;$i++;}
//     echo $total;
// } 
// $a=readline("Enter the limit: ");
// summision($a);
?>

<?php # Question 33: Access Array Elements Using PHP Program (Incomplete)
?>

<?php # Question 34: Multiply Matrices by Passing it to a Function (Incomplete)
?>
