<?php
// Set a cookie with name "user" and value "Saksham" that expires in 1 hour
$cookie_name = "user";
$cookie_value = "value";
setcookie($cookie_name, $cookie_value, time() + 60, "/"); // 3600 seconds = 1 hour

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Cookie</title>
</head>
<body>

<h2>Cookie Check</h2>

<?php
// Check if the cookie is set
if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie named '" . $cookie_name . "' is not set!";
}
?>

</body>
</html>