<?php
session_start();
$_SESSION['USERNAME']="Jassi";
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
    <?php
    if(isset($_SESSION["USERNAME"])){echo"the session is created",$_SESSION["USERNAME"];}
    else{echo "session is not created";}
    ?>
    <a href="displaysession.php">Display session</a>
    <script></script>
</body>
</html>