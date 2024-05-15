<?php

if(isset($_POST['delete'])){

    require_once($_SERVER['DOCUMENT_ROOT'] . '/src/admin/DB.php');

    $id = $_POST['deleteid'];


    $sql ="delete from auction_items where itemid = '".$id."';";
    $data = mysqli_query($conn,$sql); 

    mysqli_close($conn);

    echo '<script>alert("Item Deleted!"); window.location = "../../src/pages/viewitems.php";</script>';

}



?>