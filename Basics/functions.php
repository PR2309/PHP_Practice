<?php # Functions 
/* //  php has 2 type of functions: (i) Normal ; (ii) Arrow functions
   // Syntax:
        1. Normal function:
        function functionName($parameter1, $parameter2) {
           // Code to be executed
            return $result;
        }
        2. Arrow function:
        $functionName = fn($parameter1, $parameter2) => $parameter1 + $parameter2;


    // Return types:
    // We can assign a particular return type to the function
        $add = fn(int $a, int $b): int => $a + $b;
        function add(int $a, int $b): int {return $a + $b;}

    // Default parameters
    //we can assign default values to reduce dependency of function over outside inputs
    
        (i) function greet($name = "Guest") {
            return "Hello, " . $name;
        }
        (ii)

    // Parameter Passing:
        there are two type of parameters passing: (i) pass by value ; (ii) pass by references
        
    // Pass by Value: By default, PHP passes arguments by value, meaning a copy of the variable is passed to the function.
        function add(int $a, int $b): int {return $a + $b;}

        $add = fn(int $a, int $b): int => $a + $b;

    // Pass by Reference: You can pass variables by reference using the & operator, allowing the function to modify the original variable.
        function increment(&$value) {$value++;}

    
    // Note: 
        (i) Conciseness: Arrow functions are more concise and eliminate the need for the return keyword and braces {} for single expressions.
        (ii) arrow functions do not support passing parameters by reference. They inherently pass arguments by value, and you cannot use the & operator to pass by reference within an arrow function.
*/
?>

<?php
    // function greet($fname="Abc",$lname="Xyz"){
    //     echo "Hello ".$fname." ".$lname;
    // };
    // $fname=readline("Enter your first name: ");
    // $lname=readline("Enter your last name: ");
    // greet($fname,$lname);
?>

<?php
//    function add(float $a,float $b){return $a+$b;}
//    echo add(1.2,5.2);
  # Arrow function
//    $add=fn(float $a,float $b)=> $a+$b;
//    echo $add(1.2,5.2);
?>

<?php
// function tri(){
//     (float) $t1=readline("Enter side 1 of Triangle: ");
//     (float) $t2=readline("Enter side 2 of Triangle: ");
//     (float) $t3=readline("Enter side 3 of Triangle: ");
//     (float) $s=($t1+$t2+$t3)/2;
//     echo ($s*($s-$t1)*($s-$t2)*($s-$t3))*0.5;
// }
// function rect(){
//     (float) $l=readline("Enter length of Rectangle: ");
//     (float) $b=readline("Enter breadth of Rectangle: ");
//     echo $l*$b;
// }
// function circle(){
//     (float)$r=readline("Enter the radius of circle: ");
//     echo 2*3.141*$r;
// }
// $side=readline("Enter Shape (Circle/Rectangle/Triangle): ");
// switch($side){
//     case "Triangle":
//         tri();
//         break;
//     case "Rectangle":
//         rect();
//         break;
//     case "Circle":
//         circle();
//         break;
//     default:
//         echo"Invalid shape";
//         break;
// }
?>

<?php
    // $fine1=fn(int $a)=>$a*1;
    // $fine2=fn(int $a)=>$a*2;
    // $fine3=fn(int $a)=>$a*5;
    // $days=readline("Number of days: ");
    // echo "Total fine is: ";
    // if(1<=$days && $days<=5){echo $fine1($days);}
    // elseif(6<=$days && $days<=10){echo $fine2($days);}
    // elseif(10<$days){echo $fine3($days);}
?>

<?php
// // function BMI(float $weight,float $height){echo $weight/($height*$height);}
// $BMI=fn(float $weight,float $height)=>$weight/($height*$height);
// $w=readline("Enter your weight: ");
// $h=readline("Enter your height: ");
// // BMI($w,$h);
// echo "Your BMI is: ".$BMI($w,$h);
?>

<?php
//    $total=readline("Enter total bill: ");
//    $n=readline("Enter members present in dinner: ");
//    $per=fn(int $total,int $n)=>($total/$n);
//    echo "Amount to be paid by each member is: ".$per($total,$n);
?>

<?php #swapping
// // $swap=fn($a, $b) => [$a, $b] = [$b, $a];
// $swap = fn(&$a, &$b) => [$a, $b] = [$b, $a];
// $a=readline("Enter first number: ");
// $b=readline("Enter second number: ");
// echo "Before Swap: a = ".$a.", b = ".$b."\n";
// $swap($a,$b);
// echo "After Swap: a = ".$a.", b = ".$b."\n";
?>

<?php
//   function suffix(String &$a){$a=$a."....done";}
//   $a=readline("Enter the String: ");
//   echo("String before suffix addition: ".$a);
//   suffix($a);
//   echo("String before suffix addition: ".$a);
?>

<?php # Temperature Conversion
    // $FtoC=fn(float &$c)=>(($c*9/5)+32);
    // $CtoF=fn(float &$f)=>(($f-32)*5/9);
    // $KtoC=fn(float &$k)=>($k-273.15);
    // $CtoK=fn(float &$c)=>($c+273.15);
    // $KtoF=fn(float &$k)=>((($k-273.15)*9/5)+32);
    // $FtoK=fn(float &$f)=>((($f-32)*5/9)+273.15);
    // $choice=readline("Enter conversion you want:\n1. F => C\n2. C => F\n3. C => K\n4. K => C\n5. K => F\n6. F => K\n>> ");
    // $temp=readline("Enter temperature: ");
    // if(!(is_numeric($temp) && is_numeric($choice))){
    //     echo"Enter valid Inputs.";
    //     exit;}
    // switch($choice){
    //     case 1:echo "F => C : ".$FtoC($temp)."\n";break;
    //     case 2:echo "C => F : ".$CtoF($temp)."\n";break;
    //     case 3:echo "K => C : ".$KtoC($temp)."\n";break;
    //     case 4:echo "C => K : ".$CtoK($temp)."\n";break;
    //     case 5:echo "K => F : ".$KtoF($temp)."\n";break;
    //     case 6:echo "F => K : ".$FtoK($temp)."\n";break;
    //     default: echo "Invalid choice.\n";break;
    // }
?>

