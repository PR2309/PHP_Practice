<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling Example</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
        <label for="text">Text Input:</label>
        <input type="text" id="text" name="text" required><br><br>

        <label for="email">Email Input:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password Input:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="number">Number Input:</label>
        <input type="number" id="number" name="number" min="1" max="100" required><br><br>

        <label for="url">URL Input:</label>
        <input type="url" id="url" name="url" required><br><br>

        <label for="textarea">Text Area:</label>
        <textarea id="textarea" name="textarea" rows="4" cols="50" required></textarea><br><br>

        <label>Radio Buttons:</label>
        <input type="radio" id="option1" name="radio" value="Option 1" required>
        <label for="option1">Option 1</label>
        <input type="radio" id="option2" name="radio" value="Option 2">
        <label for="option2">Option 2</label><br><br>

        <label>Checkboxes:</label>
        <input type="checkbox" id="check1" name="checkboxes[]" value="Check 1">
        <label for="check1">Check 1</label>
        <input type="checkbox" id="check2" name="checkboxes[]" value="Check 2">
        <label for="check2">Check 2</label><br><br>

        <label for="file">File Upload:</label>
        <input type="file" id="file" name="file" accept=".jpg,.jpeg,.png,.pdf"><br><br>

        <label for="select">Select Dropdown:</label>
        <select id="select" name="select" required>
            <option value="">--Please choose an option--</option>
            <option value="Option 1">Option 1</option>
            <option value="Option 2">Option 2</option>
            <option value="Option 3">Option 3</option>
        </select><br><br>

        <input type="hidden" name="hidden" value="hidden_value">

        <button type="submit">Submit</button>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Text Input
    $text = htmlspecialchars(trim($_POST['text']));

    // Email Input
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format<br>";
    }

    // Password Input
    $password = htmlspecialchars(trim($_POST['password']));
    // Here, you would typically hash the password before storing it
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Number Input
    $number = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT);
    if ($number === false) {
        echo "Invalid number<br>";
    }

    // URL Input
    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        echo "Invalid URL format<br>";
    }

    // Text Area
    $textarea = htmlspecialchars(trim($_POST['textarea']));

    // Radio Buttons
    $radio = htmlspecialchars(trim($_POST['radio']));

    // Checkboxes
    $checkboxes = isset($_POST['checkboxes']) ? $_POST['checkboxes'] : [];

    // Select Dropdown
    $select = htmlspecialchars(trim($_POST['select']));

    // File Upload Handling (if a file is uploaded)
    if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        
        // You can implement further validation for file type and size here
        // For example, check if the file type is allowed
        $allowedFileTypes = ['image/jpeg', 'image/png', 'application/pdf'];
        if (in_array($fileType, $allowedFileTypes)) {
            // Move the file to a designated directory (make sure the directory exists and is writable)
            $destinationPath = 'uploads/' . $fileName;
            move_uploaded_file($fileTmpPath, $destinationPath);
            echo "File uploaded successfully: $fileName<br>";
        } else {
            echo "Invalid file type. Only JPG, PNG, and PDF files are allowed.<br>";
        }
    }

    // Display the processed data
    echo "<h2>Form Data Submitted:</h2>";
    echo "Text: $text<br>";
    echo "Email: $email<br>";
    echo "Hashed Password: $hashedPassword<br>";
    echo "Number: $number<br>";
    echo "URL: $url<br>";
    echo "Textarea: $textarea<br>";
    echo "Radio Selection: $radio<br>";
    echo "Checkboxes: " . implode(", ", $checkboxes) . "<br>";
    echo "Select Dropdown: $select<br>";
}
?>
</body>

</html>