<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "RRL_system";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_no = $_POST['contact_no'];
    // $departure_station = $_POST['departure_station'];
    // $destination_station = $_POST['destination_station'];
    // $journey_date = $_POST['journey_date'];
    // $class = $_POST['class'];
    // $no_of_passengers = $_POST['no_of_passengers'];
    // $payment_method = $_POST['payment_method'];

    // Insert data into database
    $sql = "INSERT INTO customer (name, email, contact_no)
            VALUES ('$name', '$email', '$contact_no')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Reservation Form</title>
</head>
<body>
    <h2>Railway Reservation Form</h2>
    <form method="POST" action="">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Contact No: <input type="text" name="contact_no" required><br><br>
         <!-- Departure Station: <input type="text" name="departure_station" required><br><br>
        Destination Station: <input type="text" name="destination_station" required><br><br>
        Date of Journey: <input type="date" name="journey_date" required><br><br>
        Class: 
        <select name="class" required>
            <option value="First Class">First Class</option>
            <option value="Second Class">Second Class</option>
            <option value="Sleeper">Sleeper</option>
        </select><br><br>
        No of Passengers: <input type="number" name="no_of_passengers" required><br><br>
        Payment Method: 
        <select name="payment_method" required>
            <option value="Credit Card">Credit Card</option>
            <option value="Debit Card">Debit Card</option>
            <option value="Net Banking">Net Banking</option>
            <option value="UPI">UPI</option>
        </select><br><br> -->
         <input type="submit" value="Submit"> 
    </form>
</body>
</html>