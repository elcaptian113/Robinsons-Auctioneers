<?php $title = 'Add: Administrator'; ?>
<?php $currentPage = 'Add Item'; ?>
<?php

$day = date("d");
$month = date("m");
$year = date("Y");

$today = $year."-".$month."-".$day;

error_reporting(0);
 
$msg = "";


if (isset($_POST['upload'])) {
    require_once($_SERVER['DOCUMENT_ROOT'] . '/src/admin/DB.php');
	
	$title = $_POST['title'];
	$desc = $_POST['description'];
	$branch = $_POST['branch'];
	
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../../src/images/" . $filename;


    $sql = 'INSERT INTO auction_items VALUES (NULL,"'.$title.'","'.$desc.'","'.$filename.'","'.$today.'","'.$branch.'")';
 

    $added = mysqli_query($conn, $sql);
    if(!$added) {
		echo '<script>alert("There was an error adding auction item.\nPlease try again later.")</script>'; 
		echo '\n'.mysqli_error($conn);
		exit;
	}
	else{
		echo '<script>alert("Auction item has been added");window.location = "./additem.php";</script>';
	}

    move_uploaded_file($tempname, $folder);

    mysqli_close($conn);
}		
?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/session/adminAuthorize.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/layout/head.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/navigation/adminNavbar.php'); ?>

<body>
	<div class="container">
		<center><h1>Add New Auction Item</h1>
		<br>
		<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/forms/additem.php'); ?>
	</div>
</body>