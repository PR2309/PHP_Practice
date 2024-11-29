<?php
$string = "PHP is the web scripting php language of 522 choice. 825";
// $exp = preg_match_all("/[wo]/i",$string, $array);
$exp = preg_match_all("/[wo]/",$string, $array);
if($exp){echo"Amatch was found.";}
else{echo"A match was not found.";}
echo"<pre>";
print_R($array);
echo"</pre>";
?>