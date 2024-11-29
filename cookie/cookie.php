<?php
setcookie('user','sj',time()+60,'/');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- <meta http-equiv="refresh" content="30" data-comment="Meta tag to refresh the page every 30 seconds"/> -->
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css" data-comment="Stylesheets"/> -->
    <!-- <script src="app.js" data-comment="JavaScript"></script> -->
    <!-- <link rel="icon" href="image.png" data-comment="Favicon for other user"/> -->
    <!-- <link rel="apple-touch-icon" href="image.png" data-comment="Favicon for Apple users"/> -->
          
    <!-- Tailwind CSS via CDN -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.13/base.min.css" rel="stylesheet"/> -->
    <!-- Tailwind JS via CDN -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.13/lib/index.min.js"></script> -->
    <!-- Bootstrap CSS via CDN -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/> -->
    <!-- Bootstrap JS and Popper.js CDN -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">//Bootstrap Js</script> -->
    <!-- Bootstrap Icons CDN -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous"/> -->
    <!-- jQuery CDN -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->
</head>
<body>
    </body>
    <?php
        if(isset($_COOKIE['user'])){echo "The cokkie with name: ",$_COOKIE['user'];}
        else{echo "Cookie is not set";}
    ?>
</body>
</html>