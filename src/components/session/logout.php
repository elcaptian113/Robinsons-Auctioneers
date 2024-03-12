<?php

session_start();
session_unset(); 
session_destroy();

echo '<script>alert("Goodbye! Logout Successful!"); window.location = "../../index.php";</script>';
exit();

?>