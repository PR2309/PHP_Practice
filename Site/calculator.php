<?php
  $num1=$_GET['num1'];
  $num2=$_GET['num2'];
  $operation=$_GET['operation'];
  switch($operation){
    case 'add':
      $result=$num1+$num2;
      break;
    case 'subtract':
      $result=$num1-$num2;
      break;
    case 'multiply':
      $result=$num1*$num2;
      break;
    case 'divide':
      if($num2!=0){$result=$num1/$num2;}
      else{$result="Error: Division by zero!";}
      break;
    default:
      $result = "Error: Invalid operation!";
  }echo "Result: $result";
?>