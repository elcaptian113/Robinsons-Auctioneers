<?php $title = 'Home: Administrator'; ?>
<?php $currentPage = 'Home'; ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/session/adminAuthorize.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/layout/head.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/navigation/adminNavbar.php'); ?>
<script>

</script>
<body>
<div class="container">
  <center><h1>Auction items</h1>
  <br>
  <table class="table table-light table-striped">
    <thead>
        <tr>
        <th>ID Number</th>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th>Date Aquired</th>
        <th>Location</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
  <?php
                        require_once($_SERVER['DOCUMENT_ROOT'] . '/src/admin/DB.php');
						$itemQuery = "SELECT ai.*, b.name AS branch_name, b.location AS branch_location FROM auction_items AS ai JOIN branches AS b ON ai.branchid = b.branchid;";
						$res = mysqli_query($conn, $itemQuery);
				 
						while ($item = mysqli_fetch_assoc($res)) {
							
						 echo "</tr><td>".$item['itemid']."</td>"
                                ."<td><strong>".$item['title']."</strong></td>"
                                ."<td>".$item['description']."</td>"
                                ."<td><img src='../../src/images/".$item['image']."'style='max-width:200px;width:100%' ></td>"
                                ."<td>".$item['date_added']."</td>"
                                ."<td>".$item['branch_name'].", ".$item['branch_location']."</td>"
                                ."<td><div class='d-grid gap-2'>"
                                ."<form method='POST' action='./updateitem.php'>"
                                ."<input type='hidden' id='updateid' name='updateid' value='".$item['itemid']."'>"
                                ."<div class='d-grid gap-2'>"
                                ."<button class='btn btn-warning' type='submit' name='update'>Update</button>"
                                ."</div>"
                                ."</form>"
                                ."<form method='POST' action='./deleteitem.php'>"
                                ."<input type='hidden' id='deleteid' name='deleteid' value='".$item['itemid']."'>"
                                ."<div class='d-grid gap-2'>"
                                ."<button class='btn btn-danger' type='submit' name='delete'>Delete</button>"
                                ."</div>"
                                ."</form>"
                                ."</div></td></tr>";

						
						}
                        mysqli_close($conn);
?>
</tbody>
</table>
</div>
</body>