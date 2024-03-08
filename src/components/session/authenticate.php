<?php

session_start();

if(isset($_POST['username'])&&!empty($_POST['username'])){

    require '../../src/admin/DB.php';

    $hash = $_POST['password'] . $salt1 . $salt2;
    $hashpassword = md5($hash);

    $sql ="select * from user_table where username = '".$_POST['username']."' and password ='".$hashpassword."';";
    $data = mysqli_query($conn,$sql); 
    $login_check = mysqli_num_rows($data);
    $result = mysqli_fetch_row($data);
    echo $result[1]. " " . $result[6];
    if($login_check > 0){ 
        $_SESSION['user'] = $_POST['username'];
        $_SESSION['user_type'] = $result[7];
        $_SESSION['name'] = $result[2];
        if($_SESSION['user_type'] == 'user'){
            header("Location: ../../src/pages/home.php");
        }
        else if($_SESSION['user_type'] == 'admin' || $_SESSION['user_type'] == 'mstr'){
            header("Location: ../../src/pages/homeAdmin.php");
        }
        
        
    }
    else{
        session_destroy();
        echo '<script>alert("Incorrect Login Credentials!")</script>'; 
    }
    mysqli_close($conn);
}
else{
session_destroy();
}	


?>