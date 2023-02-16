<?php
session_start();
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <title>MRB law firm</title>
</head>
<body>
<style>
    body{
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
</style>
<body background="mrb.jpg">
  <br>
<nav class="navbar navbar-expand bg-dark bg-opacity-50">
    <div class="container">
      <a class="navbar-brand " href="mrb.jpg"><img src="mrb.jpg" alt="" class="rounded-circle"
          style="height:80px; width:80px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-light" href="1st.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="second.php">NEW TRANSACTION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="index.php">DOCUMENTS</a>
          </li>
          <a class="nav-link text-light" href="login.php">log out</a></i></button>
        </div>
        </ul>
      </div>
    </div>
  </nav>
    
</body>
</html>