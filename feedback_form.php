<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CustomerFeedback</title>

     <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="feedback_form.css">

    <link rel="stylesheet" href="css/homepage.css">

</head>
<body>
     <!-- Navbar -->
	<nav class="navbar navbar-expand-md text-white shadow">
		<a class="navbar-brand" href="index.html">UESS</a>
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
   
    <div class="container">
        <h1>Customer Feedback</h1>
        <form action="connect.php" method="POST">
            <label for="network">Select Your Network:</label>
            <select name="network" id="network">
                <option value="MTN">MTN</option>
                <option value="GLO">GLO</option>
                <option value="AIRTEL">AIRTEL</option>
                <option value="9MOBILE">9MOBILE</option>
            </select>
            <label for="customer_service">Customer Service:</label>
            <select id="customer_service" name="customer_service">
                <option value="very-satisfied">Very Satisfied</option>
                <option value="satisfied">Satisfied</option>
                <option value="unsatisfied">Unsatisfied</option>
                <option value="very-unsatisfied">Very Unsatisfied</option>
            </select>

            <label for="internet">Internet Speed:</label>
            <select id="Internet_Speed" name="Internet_Speed">
                <option value="very-satisfied">Very Satisfied</option>
                <option value="satisfied">Satisfied</option>
                <option value="unsatisfied">Unsatisfied</option>
                <option value="very-unsatisfied">Very Unsatisfied</option>
            </select>

    
           
            <label for="call_quality">Call Quality:</label>
            <select id="call_quality" name="call_quality">
                <option value="very-satisfied">Very Satisfied</option>
                <option value="satisfied">Satisfied</option>
                <option value="unsatisfied">Unsatisfied</option>
                <option value="very-unsatisfied">Very Unsatisfied</option>
            </select>


           
            <label for="Data_Plan">Data Plan:</label>
            <select id="Data_Plan" name="Data_Plan">
                <option value="very-satisfied">Very Satisfied</option>
                <option value="satisfied">Satisfied</option>
                <option value="unsatisfied">Unsatisfied</option>
                <option value="very-unsatisfied">Very Unsatisfied</option>
            </select>

            <label for="Call_Drop">Call Drop:</label>
            <select id="Call_Drop" name="Call_Drop">
                <option value="very-satisfied">Very Satisfied</option>
                <option value="satisfied">Satisfied</option>
                <option value="unsatisfied">Unsatisfied</option>
                <option value="very-unsatisfied">Very Unsatisfied</option>
            </select>

            
            <label for="Bonus_offer">Bonus offer:</label>
            <select id="Bonus_offer" name="Bonus_offer">
                <option value="very-satisfied">Very Satisfied</option>
                <option value="satisfied">Satisfied</option>
                <option value="unsatisfied">Unsatisfied</option>
                <option value="very-unsatisfied">Very Unsatisfied</option>
            </select>
            
            <label for="Network_coverage">Network coverage:</label>
            <select id="Network_coverage" name="Network_coverage">
                <option value="very-satisfied">Very Satisfied</option>
                <option value="satisfied">Satisfied</option>
                <option value="unsatisfied">Unsatisfied</option>
                <option value="very-unsatisfied">Very Unsatisfied</option>
            </select>
            <label for="Billing_accuracy">Billing accuracy:</label>
            <select id="Billing_accuracy" name="Billing_accuracy">
                <option value="very-satisfied">Very Satisfied</option>
                <option value="satisfied">Satisfied</option>
                <option value="unsatisfied">Unsatisfied</option>
                <option value="very-unsatisfied">Very Unsatisfied</option>
            </select>
            <label for="Helpdesk_presence">Helpdesk presence:</label>
            <select id="Helpdesk_presence" name="Helpdesk_presence">
                <option value="very-satisfied">Very Satisfied</option>
                <option value="satisfied">Satisfied</option>
                <option value="unsatisfied">Unsatisfied</option>
                <option value="very-unsatisfied">Very Unsatisfied</option>
            </select>
            <br><br>


            
            <label for="rating">Rating:</label>
            <div class="rating">
                <input type="radio" id="star5" name="rating" value="5" required />
                <label for="star5"></label>
                <input type="radio" id="star4" name="rating" value="4" required />
                <label for="star4"></label>
                <input type="radio" id="star3" name="rating" value="3" required />
                <label for="star3"></label>
                <input type="radio" id="star2" name="rating" value="2" required />
                <label for="star2"></label>
                <input type="radio" id="star1" name="rating" value="1" required />
                <label for="star1"></label>
            </div>
           <br><br>

            <label for="comments">Comments</label>
            <textarea name="comments" id="comments" rows="5" cols="30" required></textarea>
            
            <br>
            <a href="connect.php">
            <input type="submit" name= "submit" id="submit" value="Submit Here"/>
            </a>

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