<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
</head>
<php>
    <h2>Enter username and Password</h2>
    <?php
        $msg="";
        if(isset($_POST['login']) && !empty($_POST["username"]) && !empty($_POST["password"])){
            if($_POST['username']==123 && $_POST['password']==123){
                $_SESSION['username']=123;
                $msg= 'you have entered valid user name and password';
            } else{$msg='wrong username or password';}
        }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        User name:<input type="text" name="username"></br><br>
        Password:<input type="password" name="password"><br>
        <button type="submit" name="login">Login</button>
        <h4><?php echo"$msg: "?></h4>
    </form>
    <a href="myprofile.php">My Profile</a>
    <a href="sessionlogout.php">Logout</a>
</body>
</html>