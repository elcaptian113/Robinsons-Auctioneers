<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../../src/pages/home.php">Robinsons</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav navbar-right">
            <?php
            
                $urls = array(
                    'Home' => '../../src/pages/home.php',
                    'History' => '../../src/pages/history.php',
                    
                );
                
                foreach ($urls as $name => $url) {
                    print '<li '.(($currentPage === $name) ? ' class="active" ': '').
                        '><a href="'.$url.'">'.$name.'</a></li>';
                }
            ?>
        </ul>
    </div>
  </div>
</nav>