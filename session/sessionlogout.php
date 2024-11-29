<?php
session_start();
unset($_SESSION["USERNAME"]);
unset($_SESSION["PASSWORD"]);
// unset($_SESSION["USERNAME"]);
session_unset(); 
session_abort(); // jeep the data unchanged from previous session undoing the changes made in the current session and  clearing session
session_destroy();
?>