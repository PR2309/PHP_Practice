<?php
session_start();
echo"The session is begin create <br/>";
echo"The session value is ".$_SESSION["USERNAME"];
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
</head>
<body>
    
<a href="logoutsession.php">Logout</a>    
</body>
</html>