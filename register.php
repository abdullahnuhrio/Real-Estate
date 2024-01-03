<?php
include "connection.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	$sqlexits = "select * from users where email = '$email'";
	$result = mysqli_query($conn, $sqlexits);
	$numrows = mysqli_num_rows($result);
	if ($numrows > 0) {
		echo "<script> alert('username already exits')";
	} else {
		if ($password == $cpassword) {
			$hash = password_hash($password, PASSWORD_DEFAULT);
			$sql = "INSERT INTO `users` ( `email`, `password`) VALUES ( '$email', '$hash')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script> alert('Account created')";

			}

		} else {
			echo "<script> alert('password not matched')";

		}
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="reg.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">

</head>



<body>

	<form class="form-box" action="register.php" method="post">
		<div class="heading">

			<h1>REGISTER</h1>
		</div>



		<div class="input-group">
			<input type="text" id="email" name="email" placeholder="Enter your email" required>

		</div>
		<div class="input-group">
			<input type="password" id="password" name="password" placeholder="Enter your password" required>


		</div>
		<div class="input-group">
			<input type="password" id="password" name="cpassword" placeholder="Confirm  your password" required>


		</div>
		<!-- <div class="input-group">
			<input type="file" id="imageInput" name="file" accept="image/*" onchange="displayImage(this)">
			<img id="previewImage" src="#" alt="Preview Image"
				style="max-width: 300px; max-height: 300px; display: none;">

		</div> -->
		<!-- <select>
			<option value="">Where did you here about us</option>
			<option value="Friend/family">Friend/family</option>
			<option value="facebook">facebook</option>
			<option value="Google search">Google search</option>
			<option value="Twitter">Twitter</option>
			<option value="Other">Other</option>
		</select> -->
		<!--Pop-up-->
		<button type="submit" class="btn" onclick="openPopup()">Submit</button>


	</form>



	<div class="popup" id="popup">
		<img src="images/02-lottie-tick-01-instant-2.gif">
		<h2>Thank you</h2>
		<p>Registration Successful.. Thanks!</p>
		<button type="button" onclick="openPopup()">OK</button>

	</div>
	<script>
		function openPopup() {
			// Perform form validation
			var email = document.getElementById('email').value;
			var password = document.getElementById('password').value;
			var confirmPassword = document.getElementById('confirmPassword').value;

			// Check if email is valid
			if (!isValidEmail(email)) {
				alert('Please enter a valid email address.');
				return false;
			}

			// Check if passwords match
			if (password !== confirmPassword) {
				alert('Passwords do not match. Please enter the same password in both fields.');
				return false;
			}

			// If validation passes, open the popup
			let popup = document.getElementById("popup");
			popup.classList.add("open-popup");

			// Hide the popup after 3 seconds
			setTimeout(function () {
				popup.classList.remove("open-popup");
				// Redirect to the login page
				openLoginPage();
			}, 3000);

			// Optionally, you can submit the form to register.php here
			// Uncomment the line below if you want to submit the form after validation
			// document.forms["registrationForm"].submit();
		}

		function isValidEmail(email) {
			// Basic email validation
			var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
			return emailRegex.test(email);
		}

		function openLoginPage() {
			// Add your logic to open the login page here
			// For example, you can redirect to the login page or show a login form
			window.location.href = "login.php"; // Change the URL accordingly
		}
	</script>


</body>

</html>