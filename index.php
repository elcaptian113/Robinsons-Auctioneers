

<?php $title = 'Login'; ?>
<?php $currentPage = 'index'; ?>
<?php require_once('src/layout/head.php'); ?>
<?php require_once('src/components/navigation/loginNavbar.php'); ?>

<body>
	<div class="container">
		<center><h1>Robinson's auction House</h1></center>
		<br>
		<?php require_once('src/components/forms/login.php'); ?>
	</div>
</body>