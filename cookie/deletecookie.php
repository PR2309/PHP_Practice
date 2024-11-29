<?php
$cookie_name = "user";
$cookie_value = "value";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['set_cookie'])) {
        // Set a cookie with the name "user" and value "Saksham" that expires in 1 hour
        setcookie($cookie_name, $cookie_value, time() + 3600, "/"); // 3600 seconds = 1 hour
        $message = "Cookie has been set!";
    } elseif (isset($_POST['delete_cookie'])) {
        // Delete the cookie by setting its expiration date to the past
        setcookie($cookie_name, "", time() - 3600, "/");
        $message = "Cookie has been deleted!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set and Delete Cookie</title>
</head>
<body>

<h2>Cookie Management</h2>

<form method="post">
    <button type="submit" name="set_cookie">Set Cookie</button>
    <button type="submit" name="delete_cookie">Delete Cookie</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($message)) {
        echo "<p><strong>$message</strong></p>";
    }
}

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