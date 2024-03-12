<?php

session_start();
session_unset(); 
session_destroy();

echo '<script>alert("Goodbye '.$_SESSION['user'].'! /nLogout Successful!"); window.location = "../../index.php";</script>';
exit();

?>