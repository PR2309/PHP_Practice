
<?php
$check = mail("khushik110012@gmail.com", "Testing Mail", "This is a test mail", "From: khushik110012@gmail.com");

if($check){
    echo "email sent";
}
else{
    echo "email not sent";
}
?>