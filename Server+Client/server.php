<?php 
include "form.html";
$errname="";
if(isset($_POST['name'])){
    if(empty($_POST['name'])){
        $errname="Name is required";
    } else {echo "The name is ",$_POST['name'];}
}
// echo "<b>submitted</b>";
// echo "<b>Name: <b/> ${name},<br/><b>E-Mail: <b/>${email}<br/><b>Website: <b/>${website},<br/><b>Comments: <b/>${comments},<br/><b>Gender: <b/>${gender}"
?>