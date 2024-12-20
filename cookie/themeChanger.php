<?php
// Check if the theme is set via a cookie
if (isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
} else {
    // Default to light mode if no cookie is set
    $theme = 'light';
}

// Toggle the theme when a button is clicked
if (isset($_POST['toggle_theme'])) {
    if ($theme === 'light') {
        $theme = 'dark';
    } else {
        $theme = 'light';
    }
    // Save the theme preference in a cookie for 30 days
    setcookie('theme', $theme, time() + (30 * 24 * 60 * 60), "/");
    header("Refresh:0"); // Refresh the page to apply the new theme
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark/Light Mode Toggle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: <?php echo $theme === 'dark' ? '#333' : '#fff'; ?>;
            color: <?php echo $theme === 'dark' ? '#fff' : '#000'; ?>;
            transition: background-color 0.5s, color 0.5s;
        }
        .toggle-btn {
            padding: 10px 20px;
            margin-top: 20px;
            cursor: pointer;
            background-color: <?php echo $theme === 'dark' ? '#fff' : '#333'; ?>;
            color: <?php echo $theme === 'dark' ? '#000' : '#fff'; ?>;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h1><?php echo ucfirst($theme); ?> Mode</h1>

<form method="post">
    <button type="submit" name="toggle_theme" class="toggle-btn">
        Toggle to <?php echo $theme === 'light' ? 'Dark' : 'Light'; ?> Mode
    </button>
</form>

</body>
</html>