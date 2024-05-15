<?php $title = 'Update: Administrator'; ?>
<?php $currentPage = 'Update Item'; ?>
<?php

$day = date("d");
$month = date("m");
$year = date("Y");

$today = $year."-".$month."-".$day;

error_reporting(0);
 
$msg = "";

if(isset($_POST['update'])){
	$itemid = $_POST['updateid'];
}

if (isset($_POST['upload'])) {
    require_once($_SERVER['DOCUMENT_ROOT'] . '/src/admin/DB.php');
	
	$title = $_POST['title'];
	$desc = $_POST['description'];
	$branch = $_POST['branch'];
	$id = $_POST['itemid'];
	
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../../src/images/" . $filename;


    $sql = "UPDATE `auction_items` SET `title`='".$title."',`description`='".$desc."',`image`='".$filename."',`branchid`='".$branch."' WHERE `itemid` = ".$id."";
 

    $added = mysqli_query($conn, $sql);
    if(!$added) {
		echo '<script>alert("There was an error updating auction item.\nPlease try again later.")</script>'; 
		echo '\n'.mysqli_error($conn);
		exit;
	}
	else{
		echo '<script>alert("Auction item has been updated");window.location = "./viewitems.php";</script>';
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
		<center><h1>Update Auction Item</h1>
		<br>
		<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/forms/updateitem.php'); ?>
	</div>
</body>