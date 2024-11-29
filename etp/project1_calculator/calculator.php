0<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- <meta http-equiv="refresh" content="30" data-comment="Meta tag to refresh the page every 30 seconds"/> -->
    <title>Calculator</title>
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
</head>
<body>
    <main>
        <!-- <form action="result.php" method="post"> -->
        < action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
            <select name="op" id="op">
                <option value="none">none</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="**">**</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
            <input type="number" id="a" name="a" placeholder="first number"/>
            <input type="number" id="b" name="b" placeholder="second number"/>
            <button type="submit">Calculate</button>
        </form>
        <?php
            // $result=null;
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                
                $a=htmlspecialchars( filter_input(INPUT_POST,'a',FILTER_SANITIZE_NUMBER_FLOAT));
                $a  = trim($a);
                $a= filter_var( $a, FILTER_VALIDATE_FLOAT);

                $b=htmlspecialchars(filter_input(INPUT_POST,'b',FILTER_SANITIZE_NUMBER_FLOAT));
                $b=trim($b);
                $b= filter_var( $b, FILTER_VALIDATE_FLOAT);
                $op=htmlspecialchars($_POST['op']);
                if(is_real($a) && is_real($b)){
                    echo "a: $a, b: $b, op: $op<br>";
                    $result= match($op){
                        '+'=> $a+$b,
                        '-'=> $a-$b,
                        '*'=> $a*$b,
                        '**'=> $a**$b,
                        '/'=> ($b!=0)?$a/$b:"Division by zero not possible",
                        '%'=> ($b!=0)?$a%$b:"division by zero not possible",
                        default => "Invalid operator"
                    };
                }
            }
            // echo "Result = ".$result;
        ?>
        <?php
            // session_start();
            // if (isset($_SESSION['result'])) {
            //     echo "Result: " . $_SESSION['result'];
            //     unset($_SESSION['result']); // Clear result after displaying
            //     session_abort(); 
            // }
            ?>
    </main>
    
    <script></script>
</body>
</html>