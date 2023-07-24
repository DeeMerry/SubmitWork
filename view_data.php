<?php
   
$conn = mysqli_connect('localhost','root','','user_db');
   $sql = "SELECT * FROM user_form";
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
   <title>View Data</title>

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
      <h1>View Data</h1>
      <?php if(count($rows)): ?>
      <table class="table">
         <thead>
            <tr>
               <th>Name</th>
               <th>Email</th>
               <th>User Type</th>
               <th>Date of Birth</th>
            </tr>
         </thead>
         <tbody>
         <?php foreach ($rows as $row): ?>
            <tr>
               <td><?php echo $row['name']; ?></td>
               <td><?php echo $row['email']; ?></td>
               <td><?php echo $row['user_type']; ?></td>
               <td><?php echo isset($row['dob']) ? $row['dob'] : ''; ?></td>
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
