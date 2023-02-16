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

        <div class="container-fluid">
       <div class="col  p-5 mt-5">

<form action="1st.php" method="POST" class="bg-opacity-50 text-center text-dark p-1 rounded-5 justify-content-center" id="login">
    <div class="container" id="form">
        <h2 class="text-dark">MRB LAW FIRM</h2>
        <?php include('message.php') ?>

        <?php
        if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <div class="form-outline mb-4 mt-5">
            <label class="form-label" for="username">Username</label>
            <input type="text" name="username" class="form-control" />
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="password">Password</label>
            <input type="password" name="password" class="form-control" />
        </div>

        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
            </div>

            <!-- <div class="col">
                <a href="login.php!">Forgot password?</a>
            </div> -->
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-4" href="1st.php">Sign in</button>

        <div class="text-center">
        </div>
        
</body>
</html>