<?php
# $_SERVER is used to access the details of the server 
// echo $_SERVER["DOCUMENT_ROOT"].'<br/>';
// echo $_SERVER["PHP_SELF"].'<br/>';
// echo $_SERVER["SERVER_NAME"].'<br/>';
// echo $_SERVER["REQUEST_METHOD"].'<br/>';
// echo "answered";

?>

<?php
// echo $_POST["name"]."<br/>";
# when we want to get data from the database or server to show it to user in browser we use $_GET Method
// echo $_GET["name"]."<br/>";
// echo $_GET["color"]."<br/>";

# when we want to submit data to the database or server secreatly so no one can see it in the browser we use $_POST Method
// echo $_POST["name"]."<br/>"; // won't display value in browser

# a $_REQUEST Method checks for data in $_GET, $_POST, $_COOKIE Methods: it's like a super set of these Methods 
// echo $_REQUEST["name"]."<br/>";
# we don't know what the user is sending us (or manually adding the data in the url), without a proper setup, validation and sanitation of data so it's better to use $_GET and $_POST methods
?>

<?php
# to get the data about the file uploaded to my server,(like size, type, etc)
// we have to double check the details of the files uploaded so that our server don't get crashed due to a large file uploaded by any user or something like this
// echo $_FILES['filename'];
?>

<?php
# a cookie is a small file that the server embeds in the user's browser, storing a bunch on information
# this superglobal helps us to store or get information about cookies in out website 
// echo $_COOKIE['cookieName'];
?>

<?php
# we can store information about the user inside the session
# it remains under we keep the session running, not closing the connection or shutting the browser 
// $_SESSION["SessionDetails"]="SessionName";
// echo $_SESSION["SessionDetails"];
?>

<?php
# it's an enviroment Valriable, keeps the data that shouldn't be accessible to anyone except for a particular person 
// $_ENV[];
?>

<?php
# it's a global array to gain access all the variables defined in any scope inside the code wihtin the file.
# Accessing the global variable named 'vars' ever declared within the file
// $vars = $GLOBAL['vars'];
?>