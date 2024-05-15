<?php

session_start();

if (!isset($_SESSION['user'])){
    header("Location: ../../index.php");
    die();
}

if($_SESSION['user_type'] !== 'mstr'){
    header("Location: ../../src/pages/home.php");
}


?>