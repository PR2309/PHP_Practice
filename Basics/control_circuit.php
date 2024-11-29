<?php
// $price =readline("Enter the price: ");
// $discount = 0;
// $regular=readline("Is it regular(true/false): ");
// if($regular && $price>500){$discount = $price*0.20;}
// else if($regular && $price<=500){$discount = $price*0.10;}
// else if(!$regular && $price>500){$discount = $price*0.05;}
// else if(!$regular && $price<=500){$discount = 0;}
// $price-=$discount;
// echo "Discount: ".$discount,"\nPrice: ".$price;
?>

<?php
// $day=readline("Enter Day: ");
// $month=readline("Enter Month: ");
// $year=readline("Enter Year: ");
// $is_Valid=false;
// switch($month){
//     case 1:
//     case 3:
//     case 5:
//     case 7:
//     case 8:
//     case 10:
//     case 12:
//         $is_Valid=(1<=$day && $day<=31)? true: false;
//         break;
//     case 4:
//     case 6:
//     case 9:
//     case 11:
//         $is_Valid=(1<=$day && $day<=30)? true: false;
//         break;
//     case 2:
//         if($year%4===0 && ($year%100!=0 || $year%400===0)){$is_Valid=(1<=$day && $day<=29)? true: false;}
//         else{$is_Valid=(1<=$day && $day<=29)? true: false;}
//         break;
//     default:
//         $Day_Valid = false;
// }
// echo "Is Valid: " . (($Day_Valid) ? "Yes" : "No");
?>

<?php
// $income=readline("Enter Salary: ");
// $age=readline("Enter your Age: ");
// $tax=0;
// if($income<10000){$tax=0;}
// else if(10000<=$income && $income<=20000){
//     if($age<65){$tax=$income*0.10;}
//     else if($age>=65){$tax=$income*0.05;}
// }
// else if(20000<$income){
//     if($age<65){$tax=$income*0.20;}
//     else if($age>=65){$tax=$income*0.15;}
// }
// echo "Initial Income: ".$income;
// echo "\nTax: ".$tax;
// $income-=$tax;
// echo "\nFinal Income: ".$income;
?>

<?php
// echo "1. Breakfast\n2. Lunch\n3. Dinner\n4. Snack\n";
// $meal = readline("Enter your choice: ");
// switch($meal){
//     case 1:
//         echo "You have chosen Breakfast\n";
//         break;
//     case 2:
//         echo "You have chosen Lunch\n";
//         break;
//     case 3:
//         echo "You have chosen Dinner\n";
//         break;
//     case 4:
//         echo "You have chosen Snack\n";
//         break;
//     default:
//         echo "Invalid choice\n";
//         break;
// }
// $food = array("Breakfast", "Lunch", "Dinner", "Snack");
?>

<?php
// $type=readline("Enter Type (Residential/Commercial/Industrial): ");
// $units=readline("Enter consumption units: ");
// $bill=0.0;
// switch($type){
//     case "Residential":
//         switch($units){
//             case ($units<=100):
//                 $bill+=$units*0.5;
//                 break;
//             case (100<$units && $units<=200):
//                 $bill+=100*0.5;
//                 $bill+=($units-100)*0.75;
//                 break;
//             case (200<$units):
//                 // $bill+=100*0.5;
//                 // $bill+=100*0.75;
//                 // $bill+=($units-200)*1.2;
//                 $bill+=($units)*1;
//                 break;
//         }
//         break;
//     case "Commercial":
//         switch($units){
//             case ($units<=200):
//                 $bill+=$units*1.5;
//                 break;
//             case (200<$units):
//                 // $bill+=200*1.5;
//                 // $bill+=100*0.75;
//                 // $bill+=($units-200)*1.2;
//                 $bill+=($units)*2;
//                 break;
//         }
//         break;
//     case "Industrial":
//         $bill+=$units*2.5;
//         break;
//     default:
//         echo "Invalid Type\n";
//         break;
// }
?>

<?php
    // $sum=0;
    // $n=readline("Enter the limit: ");
    // $i=1;
    // do{
    //     $sum+=$i;
    //     $i++;
    // }while($i<=$n);
    // echo "Sum of first 10 natural numbers is: ".$sum;
?>

<?php
// $x=readline("Enter limit: ");
// for($i=1;$i<=$x;$i++){
//     for($j=1;$j<=$i;$j++){
//         echo $i;
//     } echo"\n";
// }
?>

<?php
// $a = readline("Enter the number: ");
// $fact=1;
// $i=1;
// while($i<=$a){
//     $fact*=$i;
//     $i++;
// } echo "Factorial of ".$a." is: ".$fact;
?>

<?php 
// $n=readline("Enter number: ");
// $num=$n;
// $rev=0;
// while($num>0){
//     $rev+=intval($num%10);
//     $num=intval($num/10);
// } echo "Sum of the number ".$n." is: ".$rev;
?>

<?php
// $n=readline("Enter number: ");
// $num=$n;
// $rev=0;
// while($num>0){
//     $rev+=($num%10);
//     $rev*=10;
//     $num=intval($num/10);
// } echo "Reverse of the number ".$n." is: ".$rev/10;
?>

<?php
// $a=readline("Enter first number: ");
// $b=readline("Enter second number: ");
// $gcd=(int)1;
// $i=($a<=$b)?$a:$b;
// while($i>1){
//     if($a%$i==0 && $b%$i==0){$gcd*=$i;break;}
//     $i--;
// } echo "Greatest common divisor of ".$a." and ".$b." is: ".$gcd;
?>

<?php
// for($i=1;$i<=10;$i++){
//     for($j=1;$j<=10;$j++){
//         // echo $i*$j." ";
//         printf("%4d", $i*$j);
//     } echo "\n";
// }
?>

<?php

?>
