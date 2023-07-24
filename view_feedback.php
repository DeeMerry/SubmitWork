<?php
   $conn = mysqli_connect('localhost','root','','test2');
   $sql = "SELECT * FROM user_feedback";
   $result = mysqli_query($conn, $sql);

   // check if there are any rows
   if(mysqli_num_rows($result) > 0) {
       // fetch the rows and assign to $rows
       $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
   } else {
       // set $rows to an empty array
       $rows = [];
   }

   mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>View Feedback</title>

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
      <h1>View Feedback</h1>
      <?php if(count($rows)): ?>
      <table class="table">
         <thead>
            <tr>
               <th>Network</th>
               <th>customer_service</th>
               <th>Internet_Speed</th>
               <th>call_quality</th>
               <th>Data_Plan</th>
               <th>Call_Drop</th>
               <th>Bonus_offer</th>
               <th>Network_coverage</th>
               <th>Billing_accuracy</th>
               <th>Helpdesk_presence</th>
               <th>Rating</th>
               <th>comments</th>
               
            </tr>
         </thead>
         <tbody>
         <?php foreach ($rows as $row): ?>
            <tr>
               <td><?php echo $row['network']; ?></td>
               <td><?php echo $row['customer_service']; ?></td>
               <td><?php echo $row['Internet_Speed']; ?></td>
               <td><?php echo $row['call_quality']; ?></td>
               <td><?php echo $row['Data_Plan']; ?></td>
               <td><?php echo $row['Call_Drop']; ?></td>
               <td><?php echo $row['Bonus_offer']; ?></td>
               <td><?php echo $row['Network_coverage']; ?></td>
               <td><?php echo $row['Billing_accuracy']; ?></td>
               <td><?php echo $row['Helpdesk_presence']; ?></td>
               <td><?php echo $row['rating']; ?></td>
               <td><?php echo $row['comments']; ?></td>
               
            </tr>
         <?php endforeach; ?>
         </tbody>
      </table>
      <?php else: ?>
         <p>No records found</p>
      <?php endif; ?>
   </div>

   <!-- Bootstrap JS -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
