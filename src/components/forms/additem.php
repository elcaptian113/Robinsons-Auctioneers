

<form method="POST" action="additem.php" enctype="multipart/form-data">
            <div class="input-group mb-3">
				<span class="input-group-text" id="titleAddon">Title:</span>
				<input class="form-control" type="text" name="title" value="" required />
			</div>
			<div class="input-group mb-3">
				<span class="input-group-text" id="descriptionAddon">Description:</span>
				<input class="form-control" type="text" name="description" value="" required/>
			</div>
			<div class="input-group mb-3">
                <input class="form-control" type="file" name="uploadfile" value="" required/>
			</div>
			<div class="input-group mb-3">
				<span class="input-group-text" id="selectAddon">Select Location:</span>
				<select class="form-select" aria-label="Default select example" name="branch">
						<?php
                        require_once($_SERVER['DOCUMENT_ROOT'] . '/src/admin/DB.php');
						$branchQuery = " select * from branches ";
						$res = mysqli_query($conn, $branchQuery);
				 
						while ($branch = mysqli_fetch_assoc($res)) {
						?>	
						<option value="<?php echo $branch['branchid']; ?>"><?php echo $branch['name'].", ".$branch['location']; ?></option>
						<?php
						}
                        mysqli_close($conn);
						?>
				</select>
			</div>
            
                <button class="btn btn-primary" type="submit" name="upload">add Auction Item</button>
            
</form>