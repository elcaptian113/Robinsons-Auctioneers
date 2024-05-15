<?php $title = 'History'; ?>
<?php $currentPage = 'History'; ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/session/authorize.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/layout/head.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/navigation/navbar.php'); ?>
<script>

</script>
<body>
<div class="container">
  <h1>Auction History</h1>
  <?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/src/admin/DB.php');

    $sql ="SELECT sai.final_bid, oai.open_date, ai.title, ai.description, ai.image, b.name AS branch_name, b.location AS branch_location 
          FROM sold_auction_items AS sai 
          JOIN open_auction_items AS oai ON sai.auctionid = oai.auctionid 
          JOIN auction_items AS ai ON oai.itemid = ai.itemid 
          JOIN branches AS b ON ai.branchid = b.branchid 
          WHERE sai.userid = '".$_SESSION['userid']."';";

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
               <th>Winning Bid</th>
               </tr>
           </thead>
           <tbody>";
           while ($item = mysqli_fetch_assoc($data)) {
							
            echo "<tr><td><img src='../../src/images/".$item['image']."'style='max-width:200px;width:100%' ></td>"
                               ."<td>".$item['title']."</td>"
                               ."<td>".$item['description']."</td>"
                               ."<td>".$item['branch_name'].", ".$item['branch_location']."</td>"
                               ."<td>".$item['open_date']."</td>"
                               ."<td>£".$item['final_bid']."</td></td></tr>";
           }
           echo "</tbody></table>";
           mysqli_close($conn);
    }
    else {
      echo "<p>You have not currently won any auctions</p>";
      mysqli_close($conn);
    }
  ?>
  </div>
</body>