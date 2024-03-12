<?php $title = 'Register'; ?>
<?php $currentPage = 'register'; ?>
<?php

if (isset($_POST['username'])){

  require_once($_SERVER['DOCUMENT_ROOT'] . '/src/admin/DB.php');

	$hash = $_POST['password'] . $salt1 . $salt2;
	$passhash = md5($hash);
	$sql = "insert into user_table values (NULL,'".$_POST['username']."','".$_POST['firstName']."','".$_POST['lastName']."','".$_POST['email']."','".$_POST['dob']."','".$passhash."','".$_POST['user_type']."');";
	$added = mysqli_query($conn, $sql);
	if(!$added) {
		echo '<script>alert("There was an error adding new user.\nPlease try again later.")</script>'; 
		echo '\n'.mysqli_error($conn);
		exit;
	}
	else{
		echo '<script>alert("New User has been added"); window.location = "../../index.php";</script>';
    //header("Location: ../../index.php");
	}

  mysqli_close($conn);
}

?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/layout/head.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/navigation/loginNavbar.php'); ?>
<script>

</script>
<body>
<div class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h2 class="h3">Registration</h2>
                <h3 class="fs-6 fw-normal text-secondary m-0">Enter your details to register</h3>
              </div>
            </div>
          </div>
          <form action="register.php" method="post">
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
              </div>
              <div class="col-12">
                <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" required>
              </div>
              <div class="col-12">
                <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" required>
              </div>
              <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="example@example.com" required>
              </div>
              <div class="col-12">
                <label for="dob" class="form-label">Date Of Birth <span class="text-danger">*</span></label>
                <input type="date" class="form-control" name="dob" id="dob" placeholder="dob" required>
              </div>
              <div class="col-12">
                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password" id="password" value="" required>
              </div>
              <div class="col-12">
                <label for="confirm_password" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" value="" required>
              </div>
              <input type="hidden" id="user_type" name="user_type" value="user">
              <div class="col-12">
                <div class="d-grid">
                  <button class="btn btn-lg btn-primary" type="submit">Sign up</button>
                </div>
              </div>
            </div>
          </form>
          <div class="row">
            <div class="col-12">
              <hr class="mt-5 mb-4 border-secondary-subtle">
              <div class="col-12">
                <p class="m-0 text-secondary text-center">Already have an account? <a href="../../index.php" class="link-primary text-decoration-none">Sign in</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>