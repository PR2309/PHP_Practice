<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $op=htmlspecialchars($_POST['op']);
    $a=htmlspecialchars($_POST['a']);
    $b=htmlspecialchars($_POST['b']);
    $result=null;
    if(!empty($a) && !empty($b) && $op!="none" && is_numeric($a) && is_numeric($b)){
        $result= match($op){
            '+'=>$a+$b,
            '-'=>$a-$b,
            '*'=>$a*$b,
            '**'=>$a**$b,
            '/'=>$b != 0 ? $a / $b : 'Division by zero error',
            '%'=>$b != 0 ? $a % $b : 'Division by zero error',
            default => 'Invalid operation'
        };
    }
    // echo "a: $a, b: $b, ".var_dump($op)." result: $result";
    session_start();
    $_SESSION['result'] = $result;
    header('Location: calculator.php');
    exit();
}
else {
    header('Location: calculator.php');
    exit();
}