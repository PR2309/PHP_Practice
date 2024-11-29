<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="refresh" content="1000" data-comment="Meta tag to refresh the page every 1000 seconds"/>
    <title>Document</title>
</head>
<body>
<?php
$name=$email=$contact=$eventDate=$atytendees=$comments="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['name'])){$nameErr="Full name must contain only letters and spaces";}
    else{$name=trim(htmlspecialchars(filter_var($_POST["name"],FILTER_SANITIZE_STRING)));}
    if(empty($_POST['email'])){$emailErr="E-Mail must contain email format";}
    else{
        $email=filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);
        $email=filter_var($email,options: FILTER_SANITIZE_EMAIL);
        $email=trim(htmlspecialchars($email));}
    if(empty($_POST['contact'])){$contactErr="Contact ";}
    else{$contact=filter_var($_POST["contact"],FILTER_VALIDATE_INT);
        $contact=filter_var($_POST["contact"],FILTER_SANITIZE_NUMBER_INT);
        $contact=trim(htmlspecialchars($contact));}
}
?>    
    
    <script></script>
</body>
</html>