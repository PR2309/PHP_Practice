<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
</head>
<body>
    <style>
        #Page{
            display: flex;
            flex-direction: row;
            padding: 1.2rem;
        }
    </style>
    <?php include "header.php"?>
    <?php include "navbar.php"?>
    <div id="Page">
        <?php include "mainBody.php";?>
        <?php include "sideBar.php";?>
    </div>
    <?php include "footer.php"?>
</body>
</html>