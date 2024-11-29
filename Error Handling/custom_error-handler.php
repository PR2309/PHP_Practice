<?php
    // error handler function
    function customError($errno,$errstr){echo "<b>Error:</b> [$errno] $errstr\n";}

    // set error handler
    set_error_handler("customError");

    // trigger error
    echo($test);
?>
