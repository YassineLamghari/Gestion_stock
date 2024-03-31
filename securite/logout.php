<?php
SESSION_START();

$SESSTION=array();

session_destroy();

header("location: ../login.php");

exit();
?>