<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../../src/pages/home.php">Robinsons</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav me-auto mb-2 mb-lg-0">
            <?php
            
                $urls = array(
                    'Home' => '../../src/pages/home.php',
                    'History' => '../../src/pages/history.php',
                    'Live Auction' => '../../src/pages/liveauction.php',
                    
                );
                
                foreach ($urls as $name => $url) {
                    print '<li class="nav-item">
                        <a  '.(($currentPage === $name) ? ' class="nav-link active" ': 'class="nav-link"').' href="'.$url.'">'.$name.'</a></li>';
                }
            ?>
        </ul>
        <form class="d-flex">
					<div class="form-group">
						<label id="user" class=" col-form-label"style="color: Black;">Logged in as: <?php echo $_SESSION['user']; ?></label>
            <a class="btn btn-outline-danger" href="../../src/components/session/logout.php">Log Out</a>
					</div>
		  </form>
    </div>
  </div>
</nav>