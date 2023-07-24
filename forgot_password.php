<?php
// Include the config file and initialize the session
include 'config.php';
session_start();

// Define an error variable
$error = '';

// If the form is submitted
if (isset($_POST['submit'])) {
  // Get the email address entered by the user
  $email = mysqli_real_escape_string($conn, $_POST['email']);

  // Check if the email exists in the database
  $sql = "SELECT * FROM user_form WHERE email='$email'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    // Generate a unique token and store it in the database
    $token = bin2hex(random_bytes(32));
    $expiry = time() + (60 * 60); // Set token expiration time to 1 hour
    $sql = "UPDATE user_form SET reset_token='$token', reset_token_expiry='$expiry' WHERE email='$email'";
    mysqli_query($conn, $sql);

    // Send an email to the user with the reset password link
    $to = $email;
    $subject = 'Reset your password';
    $message = "Click the link below to reset your password:\n\n";
    $message .= "https://example.com/reset_password.php?token=$token";
    $headers = "From: Your Name <yourname@example.com>\r\n";
    mail($to, $subject, $message, $headers);

    // Set a success message and redirect the user back to the login page
    $_SESSION['success'] = 'An email has been sent to your email address with instructions to reset your password.';
    header('location: login_form.php');
    exit;
  } else {
    // If the email does not exist in the database, show an error message
    $error = 'Email address not found.';
  }
}
?>

<!-- Html part -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forgot Password</title>

  <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/homepage.css">

</head>


<body>

  <!-- Navbar -->
	<nav class="navbar navbar-expand-md text-white shadow">
		<a class="navbar-brand" href="homepage.php">UESS</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item" >
					<a class="nav-link" href="register_form.php">Register</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login_form.php">Login</a>
				</li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Nigeria
                    </a>
                    
                </li>
			</ul>
		</div>
	</nav>

  <div class="form-container">
      
      <form method="post">
          <h2>Reset Your Password</h2>
          <?php if ($error): ?>
              <div class="error"><?php echo $error; ?></div>
          <?php endif; ?>

          <input type="email" name="email" required placeholder="enter your email">
          <input type="submit" name="submit" value="Reset Password" class="form-btn">
      </form>

  </div>

    <!-- Footer -->
    <footer class="footer">
    <div class="footer_containerr">
        <div class="row">
            <div class="col-md-4">
                <p>&copy; 2023</p>
            </div>
            <div class="col-md-4 text-center">
                <p>Your Company. All Rights Reserved.</p>
            </div>
            <div class="col-md-4 text-right">
                <p>Terms | Privacy Policy</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
