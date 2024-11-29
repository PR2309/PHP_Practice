<?php
$n=(int)readline("Enter number of employees: ");
$flag1=true; // morning
$flag2=true; // afternoon
$flag3=true; // night
$sum=0;
$arr1=array();  // name
$arr2=array();  // shift
$arr3=array();  // hours
for ($i=0;$i<$n;$i++) {
    $arr1[$i]=readline("Name: ");
    $x=readline("Shift: ");
    if(in_array($x, $arr2)){echo "Shift already used\n"; break;}
    if($flag1){$arr2[$i]=$x; $flag1=false;}
    else if($flag2){$arr2[$i]=$x;$flag2=false;}
    else if($flag3){$arr2[$i]=$x;$flag3=false;}
    $arr3[$i]=readline("Hours: ");
    $sum+=$arr3[$i];
    echo "\nEmployee: ".$arr1[$i]."\nAssigned Shift: ".$arr2[$i]."\nTotal Work Hours: ".$sum."\n\n";
} echo "Shift Report: [ ";
for ($i=0;$i<$n;$i++) {
    echo "'".$arr1[$i]."' => '".$arr2[$i]."' ";
    if($i<$n-1){echo ", ";}
} echo "]\n\n";
?>