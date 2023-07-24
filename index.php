<!DOCTYPE html>
<html lang="en">
<head>
	<title>Webpage with Navbar, Main Body, and Footer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="css/homepage.css">
	

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link
	rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  />

	<!-- jQuery and Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


	
<style>
	
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,600;0,700;1,200&display=swap');

*{
	margin: 0;
	padding: 0;
	font-family: 'Poppins', sans-serif;
}

/* CSS for the navbar */
.navbar {
	background-color: rgb(9, 185, 118);
	color: #fff;
	padding: 5px 20px;
	box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15);
	width: 100%;
	z-index: 999;
}

.navbar-brand {
	font-size: 28px;
	font-weight: bold;
	color: #fff;
	background-color: rgb(9, 185, 118);
	padding: 10px 30px;
	border-radius: 5px;
	
}

.navbar-brand:hover{
	color: #dedfde;
   
}

.navbar-nav .nav-link {
	font-size: 18px;
	font-weight: bold;
	color: #fff;
	transition: 1s;

}


.nav-link:hover{
	color:  rgb(9, 185, 118);
	border: 1px solid white;
	border-radius: 5px;
	background: white;
}

/* CSS for the main body */
.main {
	width: 100%;
	height: 100vh;
	padding: 80px 120px;
	background-color: #f2f2f2;
	
}
	
.left {
	padding-top: 50px;
}

.left h1 {
	font-size: 45px;
	font-weight: bold;
	color: rgb(9, 185, 118);
	line-height: 1.5;

}

.left p {
	font-size: 25px;
	padding-top: 15px;
	line-height: 1.5;
}

/* CSS for the right image */

.right img {
width: 40em;

} 


/* CSS for the button */
.btn {

background:rgb(9, 185, 118); 
color: #fff;
text-transform: capitalize;
font-size: 22px;
cursor: pointer;
font-weight: 550;
padding: 10px 50px;
transition: 1s;
}
	

.btn:hover {
background:rgb(174, 241, 215);
color:rgb(2, 141, 88);

}



/* CSS for the footer */
.footer {
background-color: rgb(9, 185, 118);
color: #fff;
padding: 10px;
text-align: center;
box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.15);
}

.footer .row{
display: flex;
justify-content: center;
gap: 150px;
font-weight: 600;
}

.row a{
color: #f2f2f2;
}


/* making the site responsive by using media querey */
@media only screen and (max-width: 400px) {
	
.right img {
display: none;
}

.navbar-toggler{
color: black;
}

.main {
padding: 0;

}

.left {
text-align: center;
padding: 30px;
margin:0 auto;
}

.left h1 {
padding-top: 20px;
font-size: 40px;

}

.left p {
padding-top: 30px;
font-size: 20px;
line-height: 1.5;
padding:0;

}

.footer .row{
flex-direction: column;
align-items: center;
padding-top: 20px;
gap: 0;
}

.btn {
font-size: 16px;
padding: 10px 25px;
margin-top: 20px;
}
}
</style>


</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-md text-white shadow">
		<a class="navbar-brand" href="index.php">UESS</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
			<i class="fas fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item" >
					<a class="nav-link active" href="register_form.php">Register</a>
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
	
	<!-- Main body -->
        <div class="container-fluid main">
            <div class="row">
                <div class="col-md-6 left">
                    <h1>Experience Seamless Connectivity</h1>
                    <p> Report Network Issues, Get Them Resolved Instantly, 
						Say Goodbye to Network Hassles and Connect with 
						Confidence.
					</p>
                    <button type="button" class="btn"> LEARN MORE</button>
                </div>

                <div class="col-md-6 right">
					<img src="images\istockphoto-1397818637-612x612-removebg-preview.png" alt="Image" class="image">
					
				</div>
            </div>
        </div>
  
	
	<!-- Footer -->
	<footer class="footer">
		<div class="container">
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