<!-- Html and css file of thnak you page-->

<!DOCTYPE html>
<html>
<head>
	<title>Thank You</title>
	<style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,600;0,700;1,200&display=swap');

    *{
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
      }

		.container {
			margin: 0 auto;
      margin-top: 230px;
			width: 80%;
			text-align: center;
		}
    
		h1 {
			font-size: 3em;
			margin-bottom: 30px;
            color: #45a049;
            
		}
		p {
			font-size: 1.5em;
			margin-bottom: 20px;
             color: #45a049;
		}

        .success-message {
        background-color: #dff0d8;
        color: #3c763d;
        border: 1px solid #d6e9c6;
        padding: 10px;
        margin: auto;
        margin-top: 50px;
        border-radius: 4px;
        cursor: pointer;
        width: 300px;
        text-align: center;
    
    }
	</style>
</head>
<body>
    
	<div class="container">
		<h1>Thank You!</h1>
		<p>Your feedback has been submitted successfully.</p>
	</div>

    <script>
    function redirectToHomePage() {
        window.location.href = "index.html";
    }
</script>
</body>
</html>




<?php

$host = "localhost"; // replace with your host
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$database = "test2"; // replace with your database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// connect to database...
if(isset($_POST['network'])){
    $network = filter_var($_POST['network'], FILTER_SANITIZE_STRING);
  } else {
    $network = "";
  }
  
  if(isset($_POST['customer_service'])){
    $customer_service = filter_var($_POST['customer_service'], FILTER_SANITIZE_STRING);
  } else {
    $customer_service = "";
  }
  
  if(isset($_POST['Internet_Speed'])){
    $Internet_Speed = filter_var($_POST['Internet_Speed'], FILTER_SANITIZE_STRING);
  } else {
    $Internet_Speed = "";
  }
  
  if(isset($_POST['call_quality'])){
    $call_quality = filter_var($_POST['call_quality'], FILTER_SANITIZE_STRING);
  } else {
    $call_quality = "";
  }
  
  if(isset($_POST['Data_Plan'])){
    $Data_Plan = filter_var($_POST['Data_Plan'], FILTER_SANITIZE_STRING);
  } else {
    $Data_Plan = "";
  }
  
  if(isset($_POST['Call_Drop'])){
    $Call_Drop = filter_var($_POST['Call_Drop'], FILTER_SANITIZE_STRING);
  } else {
    $Call_Drop = "";
  }

  if(isset($_POST['Bonus_offer'])){
    $Bonus_offer = filter_var($_POST['Bonus_offer'], FILTER_SANITIZE_STRING);
  } else {
    $Bonus_offer = "";
  }

  if(isset($_POST['Network_coverage'])){
    $Network_coverage = filter_var($_POST['Network_coverage'], FILTER_SANITIZE_STRING);
  } else {
    $Network_coverage = "";
  }

  if(isset($_POST['Billing_accuracy'])){
    $Billing_accuracy = filter_var($_POST['Billing_accuracy'], FILTER_SANITIZE_STRING);
  } else {
    $Billing_accuracy = "";
  }

  if(isset($_POST['Helpdesk_presence'])){
    $Helpdesk_presence = filter_var($_POST['Helpdesk_presence'], FILTER_SANITIZE_STRING);
} else {
    $Helpdesk_presence = "";
}


  if(isset($_POST['rating'])){
    $rating = filter_var($_POST['rating'], FILTER_SANITIZE_STRING);
  } else {
    $rating = "";
  }
  
  if(isset($_POST['comments'])){
    $comments = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);
  } else {
    $comments = "";
  }
  

$sql = "INSERT INTO user_feedback  (network, customer_service, Internet_Speed, call_quality, Data_Plan, Call_Drop, Bonus_offer, Network_coverage, Billing_accuracy, Helpdesk_presence, rating, comments) VALUES ('$network', '$customer_service', '$Internet_Speed', '$call_quality', '$Data_Plan', '$Call_Drop', '$Bonus_offer', '$Network_coverage', '$Billing_accuracy', '$Helpdesk_presence', '$rating', '$comments')";

if ($conn->query($sql) === TRUE) {
    echo  "<div class='success-message' onclick='redirectToHomePage()'>Go Back Home</div>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>

