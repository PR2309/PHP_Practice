<?php
// if(isset($_POST["submit"])){
if($_SERVER["REQUEST_METHOD"]==="GET" || $_SERVER["REQUEST_METHOD"]==="GET"){
// Retrieve and sanitize input from the GET request
$fName = htmlspecialchars($_GET['fName']);
$lName = htmlspecialchars($_GET['lName']);
$fav = htmlspecialchars($_GET['fav']);

if(empty($fName) ){
    header(header: 'Location: '.$_SERVER["HTTP_HOST"]);
    exit('Invalid');

}

$fName=$_GET['fName'];
$lName= $_GET['lName'];
$fav=$_GET['fav'];
echo "First Name: $fName,<br/>Last Name: $lName,<br/>Favorite Pet: $fav";
}
else{ header("Location: ./formHandling1.php");}

// always use server side sequerity when it commes to sequerity as require or any html css or js fuction can be changed by the default dev ools available in each browser 
// php is best here because it runs in the server and display only the result here so browser dev tools can't change the code