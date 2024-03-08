

<?php $title = 'Login'; ?>
<?php $currentPage = 'index'; ?>
<?php require_once('src/layout/head.php'); ?>
<?php require_once('src/components/navigation/loginNavbar.php'); ?>
<style>
.form-signin {
  max-width: 330px;
  padding: 1rem;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
<body>
	<div class="container">
		<center><h1>Robinson's auction House</h1></center>
		<br>
		<main class="form-signin w-100 m-auto">
			<form>
				<h1 class="h3 mb-3 fw-normal">Please sign in</h1>
				<div class="form-floating">
					<input type="text" class="form-control" id="floatingInput">
					<label for="floatingInput">Username</label>
				</div>
				<div class="form-floating">
					<input type="password" class="form-control" id="floatingPassword">
					<label for="floatingPassword">Password</label>
				</div>
				<button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
				<p class="mt-5 mb-3 text-body-secondary">RobinsonAuctioneers © 2024</p>
			</form>
		</main>
	</div>
</body>