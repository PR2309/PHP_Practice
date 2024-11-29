<?php
include "./file2.php";
// require "./file2.php";
/* Difference between
~> include and require statements is the error generation

    include(): If the file specified in include() cannot be found, it will emit a warning (E_WARNING) but the script will continue to execute.

    require(): If the file specified in require() cannot be found, it will emit a fatal error (E_ERROR) and halt the execution of the script.

*/
echo $a."<br/>";
abc();
?>
