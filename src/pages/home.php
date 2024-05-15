<?php $title = 'Home'; ?>
<?php $currentPage = 'Home'; ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/session/authorize.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/layout/head.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/navigation/navbar.php'); ?>
<script>

</script>
<body>
<div class="container">
  <h1>Robinsons Auctioneers</h1>
  <h6>User Profile</h6>
  <br>
  <table class="table table-light table-striped">
    <thead>
        <tr>
        <th>ID Number</th>
        <th>Username</th>
        <th>Full name</th>
        <th>E-mail</th>
        <th>Birthday</th>
        </tr>
    </thead>
    <tbody>
  <?php
            require_once($_SERVER['DOCUMENT_ROOT'] . '/src/admin/DB.php');
						$itemQuery = "SELECT * FROM user_table where username = '".$_SESSION['user']."' ;";
						$res = mysqli_query($conn, $itemQuery);
				 
						while ($item = mysqli_fetch_assoc($res)) {
							
						 echo "</tr><td>".$item['id']."</td>"
                                ."<td><strong>".$item['username']."</strong></td>"
                                ."<td>".$item['fname']." ".$item['lname']."</td>"
                                ."<td>".$item['email']."</td>"
                                ."<td>".$item['dob']."</td></tr>";
						}

?>
</tbody>
</table>
  <h2>Upcoming auctions</h2>
  <p>table of upcoming auctions sorted by nearest date/time</p>
  <?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/src/admin/DB.php');

    $sql ="SELECT oai.open_date, ai.title, ai.description, ai.image, b.name AS branch_name, b.location AS branch_location 
    FROM open_auction_items AS oai 
    JOIN auction_items AS ai ON oai.itemid = ai.itemid 
    JOIN branches AS b ON ai.branchid = b.branchid 
    WHERE oai.status = 'pending';";

    $data = mysqli_query($conn,$sql); 
    $item_check = mysqli_num_rows($data);
    if($item_check > 0){ 
           echo "<table class='table table-light table-striped'>
           <thead>
               <tr>
               <th>Title</th>
               <th>Description</th>
               <th>Image</th>
               <th>Location</th>
               <th>Auction Date</th>
               </tr>
           </thead>
           <tbody>";
           while ($item = mysqli_fetch_assoc($data)) {
							
            echo "<tr><td><img src='../../src/images/".$item['image']."'style='max-width:200px;width:100%' ></td>"
                               ."<td>".$item['title']."</td>"
                               ."<td>".$item['description']."</td>"
                               ."<td>".$item['branch_name'].", ".$item['branch_location']."</td>"
                               ."<td>".$item['open_date']."</td></td></tr>";
           }
           echo "</tbody></table>";
           mysqli_close($conn);
    }
    else {
      echo "<p>There are currently no upcoming auctions</p>";
      mysqli_close($conn);
    }
  ?>
          </div>
</body>