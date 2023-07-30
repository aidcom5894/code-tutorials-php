<?php 

include('config.php');

?>

<div class="container topshortHeight">

<?php 

if(isset($_POST['premiumMembership']))
{
	$userEmail = $_POST['useremail'];
	$userActivationCode = $_POST['activationCode'];
	$profilePassword = $_POST['userPassword'];

	$recoveryDate = date('Y-m-d H:m:s');

	$recoveryStatus = "Account Recovered";

	$matchExistingEmail = mysqli_query($config,"SELECT useremail FROM recovery_db WHERE useremail='$userEmail'");

	$matchActivationCode = mysqli_query($config,"SELECT activation_code FROM recovery_db WHERE activation_code='$userActivationCode'");

	$matchPassword = mysqli_query($config,"SELECT user_password FROM recovery_db WHERE user_password='$profilePassword'");

	if(mysqli_num_rows($matchExistingEmail)<0)
	{
		echo "<script>alert('No Terminated Account Found')</script>";
	}
	else if(mysqli_num_rows($userActivationCode)<0)
	{
		echo "<script>alert('This Activation Code does not match with the Admin Code.')</script>";
	}
	else if(mysqli_num_rows($userActivationCode)<0)
	{
		echo "<script>alert('The Password Provided by your does not match with the profile Password.')</script>";
	}
	else
	{
		mysqli_query($config,"UPDATE recovery_db SET profile_status='Active',recovery_date='$recoveryDate',recovery_status='$recoveryStatus' WHERE useremail='$userEmail'");

		echo "<div class='alert alert-info alert-dismissible fade show bottomshortHeight' role='alert'>";
		echo "Dear <strong> ".gethostname().".</strong> The terminated user is now successfully activated and can login through their credentials to access the Dashboard.";
		echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
		echo "</div>";
	}


}



?>



<div class="container">
<div class="row">

<div class="col-sm-4">
<img src="assets/images/signup.jpg" class="img-fluid" alt="signup_image" style="height: 420px; width:350px;">
<div class="bottomshortHeight"></div>

</div>

<div class="col-sm-8">

<fieldset>
<legend><strong>Premium User Signup</strong></legend>

<form method="POST">

<div class="mb-3">
<label for="username" class="form-label"><span style="color: #900C3F;"><strong>Email:</strong></span></label>
<input type="email" class="form-control" name="useremail" autocomplete="off" required="" placeholder="User Email">
</div>

<div class="mb-3">
<label for="usercontact" class="form-label"><span style="color: #900C3F;"><strong>Activation Code:</strong></span></label>
<input type="text" class="form-control" name="activationCode" autocomplete="off" required="" placeholder="Activation Code Provided By Admin">
</div>

<div class="mb-3">
<label for="usercontact" class="form-label"><span style="color: #900C3F;"><strong>Password:</strong></span></label>
<input type="password" class="form-control" name="userPassword" autocomplete="off" required="" placeholder="Password Provided By Admin">
</div>


<div class="bottomshortHeight"></div>

<button type="submit" class="btn btn-primary float-end" name="premiumMembership">Become Premium User</button>
</form>

</fieldset>

</div>

</div>
</div>

</div>



<!-- section for quicklinks starts here -->
<div class="container bottomshortHeight topshortHeight">
  <div class="row">
    <div class="col-sm-3"><a href="view_all_users.php" class="btn btn-success">View Registered Users</a></div>
    <div class="col-sm-3"><a href="#" class="btn btn-success">General User Login</a></div>
    <div class="col-sm-3"><a href="premium_signup.php" class="btn btn-success">Premium Signup</a></div>
    <div class="col-sm-3"><a href="recoverable_users.php" class="btn btn-success">View Recoverable Data</a></div>
  </div>
</div>
<!-- section for quicklinks ends here -->