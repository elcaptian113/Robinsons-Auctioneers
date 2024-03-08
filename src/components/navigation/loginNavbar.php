<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../../src/pages/home.php">Robinsons</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php if($currentPage == 'index') echo "active" ?>" aria-current="page" href="../../index.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($currentPage == 'register') echo "active" ?>" href="../../src/pages/register.php">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>