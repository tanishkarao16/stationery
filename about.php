<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
   <style>
      body {
        background-color: #f7f7f7;
      }
      p{
         font-size: 15px;
         padding: auto 10px;
      }
      h1, h2, h3, h4, h5, h6 {
        color: #008080;
        
      }
      .btn {
        background-color: #f5d9e0;
        border-color: #008080;
      }
      .btn:hover, .btn:focus {
        background-color: #008080;
        color: #fff;
      }
    </style>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

   <link rel="stylesheet" href="style1.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

    <div class="container mt-5">
      <p>Welcome to our stationery website! We are a small, independent business that specializes in offering a wide selection of high-quality pens, pencils, and other office supplies. Our goal is to provide our customers with the best shopping experience possible, from the moment they visit our website until their order arrives at their doorstep.</p>
      <p>We pride ourselves on our excellent customer service and fast shipping. If you have any questions or concerns about your order, don't hesitate to reach out to us. We are always happy to help.</p>
      <p>Thank you for considering us for all of your stationery needs. We hope to see you again soon!</p>
      <a href="#" class="btn btn-primary mt-5">Contact Us</a>
    </div>


<?php include 'footer.php'; ?>

<script src="script.js"></script>

</body>
</html>