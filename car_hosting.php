<?php 
session_start();
include('includes/config.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DriveEasy | Coming Soon</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
  <!-- Additional CSS -->
  <style>
    body {
      font-family: 'Lato', sans-serif;
      background-color: #f4f4f4;
      padding-top: 50px;
    }
    .container {
      text-align: center;
      margin-top: 50px;
    }
    h1 {
      color: #333;
      font-size: 36px;
      margin-bottom: 20px;
    }
    p {
      color: #666;
      font-size: 18px;
      margin-bottom: 20px;
    }
    .fa-cog {
      animation: spin 2s linear infinite;
    }
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
  </style>
</head>
<body>
  <?php include('includes/header.php'); ?>
  <div class="container">
    <h1>Coming Soon</h1>
    <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
    <p>Our car hosting service is currently under construction.</p>
    <p>Please check back later for updates.</p>
  </div>
  <?php include 'includes/footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>
</body>
</html>