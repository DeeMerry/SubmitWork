<?php
@include 'config.php';

session_start();

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Check if the user exists based on the email
    $select = "SELECT * FROM user_form WHERE email = '$email'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];

        // Verify the entered password with the hashed password in the database
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, user can be logged in
            if ($row['user_type'] === 'admin') {
                $_SESSION['admin_name'] = $row['name'];
                header('location: admin_page.php');
                exit();
            } elseif ($row['user_type'] === 'user') {
                $_SESSION['user_name'] = $row['name'];
                header('location: user_page.php');
                exit();
            }
        } else {
            $error[] = 'Incorrect email or password!';
        }
    } else {
        $error[] = 'User not found';
    }
}
?>

<!-- The rest of your HTML code remains unchanged -->


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   

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
					<a class="nav-link active" href="login_form.php">Login</a>
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

   <form action="feedback_form.php" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter Email Address">
      <input type="password" name="password" required placeholder="Enter Password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>Forgot your password? <a href="forgot_password.php">Click here to reset it</a></p>

   </form>

</div>

<!-- Footer -->
<footer class="footer">
		<div class="footer-container">
			<div class="row">
				<div class="text-right">
					<p>&copy; 2023</p>
				</div>
				<div class="text-center">
					<p>DeeMerry TechVibe</p>
				</div>
				<div class="text-a">
					<a href="#">Terms | Privacy Policy</a>
				</div>
			</div>
		</div>
	</footer>

</body>
</html>