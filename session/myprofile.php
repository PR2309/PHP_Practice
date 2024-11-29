<?php
// session_start();
// if (!isset($_SESSION['username'])) {
//     // Redirect to login page or show an error message
//     header("Location: login.php"); // Change 'login.php' to your actual login page
//     exit();
// }
// // if($_SERVER["REQUEST_METHOD"=="POST"]){
//     if(!empty($_SESSION['username']) && !empty($_SESSION['password'])){
//         $username=filter_var($_SESSION['username'],FILTER_SANITIZE_STRING);
//         $username= trim(htmlspecialchars($username));

//         $password=filter_var($_SESSION['password'],FILTER_SANITIZE_STRING);
//         $password=trim(htmlspecialchars($password));

//         echo "Username: ".$username."<br/>Password: ",$password;
//     }
// // }
?>

<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: login.php"); // Change 'login.php' to your actual login page
    exit();
}

// Check if the session variables are set
if (!empty($_SESSION['username'])) {
    // Sanitize the username
    $username = htmlspecialchars(trim($_SESSION['username']));

    // Output the sanitized username
    echo "Username: " . $username . "<br/>"; 
    // Do not output the password for security reasons
} else {
    echo "No user is logged in.";
}
?>