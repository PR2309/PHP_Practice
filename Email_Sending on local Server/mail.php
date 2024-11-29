<?php
// $to="sonajas805@gmail.com";
$to="piyushanand2309@gmail.com";
$subject="Test email";
$message="This is a test email for PHP";
$from="prlucifer2309@gmail.com";
$headers="From:$from";
mail($to,$subject,$message,$headers);
echo"mailsent";
?>
