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
          <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/forms/register.php'); ?>
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