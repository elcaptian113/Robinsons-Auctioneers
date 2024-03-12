<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../../src/pages/homeAdmin.php">Robinsons</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav navbar-right">
            <?php
            
                $urls = array(
                    'Home' => '../../src/pages/adminHome.php',
                    'Page 1' => '../../src/pages/adminPage1.php',
                    
                );
                
                foreach ($urls as $name => $url) {
                    print '<li '.(($currentPage === $name) ? ' class="active" ': '').
                        '><a href="'.$url.'">'.$name.'</a></li>';
                }
            ?>
        </ul>
        <form class="navbar-form navbar-right">
					<div class="form-group">
						<label id="user" class=" col-form-label"style="color: white;">Logged in as: <?php echo $_SESSION['user']; ?>,</label>
					</div>
					<a class="btn btn-default" href="../../src/components/session/logout.php">Log Out</a>
				</form>
    </div>
  </div>
</nav>