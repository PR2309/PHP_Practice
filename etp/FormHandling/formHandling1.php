<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- <meta http-equiv="refresh" content="30" data-comment="Meta tag to refresh the page every 30 seconds"/> -->
    <title>Form Handling</title>
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
    <!-- Google API Icons via CDN -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=home"/> -->
    <!-- CDN font-awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" data-comment="pakage: npm install @fortawesome/fontawesome-free,module:import '@fortawesome/fontawesome-free/css/all.min.css';"/> -->
    <style>
        *{
            background-color: black;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            color:white
        }
        form{
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            background-color:grey;
            min-width: 500px;
            min-height:800px;
        }
    </style>
</head>
<body>
    
    <main>
        <form action="formhandler1.php" method="POST">
            <label for="fName">First Name:</label>
            <input type="text" id="fName" name="fName" placeholder="First Name"/>

            <label for="lName">Last Name:</label>
            <input type="text" id="lName" name="lName" placeholder="Last Name"/>

            <label for="fav">Favourite Pet</label>
            <select name="fav" id="fav">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>
            <button type="submit">Submit</button>
        </form>
    </main>
    
    <script></script>
</body>
</html>