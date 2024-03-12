<?php $title = 'Home'; ?>
<?php $currentPage = 'home'; ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/session/authorize.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/layout/head.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/navigation/navbar.php'); ?>
<script>

</script>
<body>
  <h1>Home Page</h1>
  <a href="../../src/components/session/logout.php">logout</a>
  <p>maybe a table for user profile</p>
  <h2>Upcoming auctions...</h2>
  <p>table of upcoming auctions sorted by nearest date/time</p>
</body>