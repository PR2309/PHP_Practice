<?php
$str="<h1?>Hello World!</h1>";
if(trim(htmlspecialchars(filter_var($str,FILTER_SANITIZE_STRING)))){echo "Valid";}
else{echo "Invalid";}
echo $newStr."<br/>";
?>