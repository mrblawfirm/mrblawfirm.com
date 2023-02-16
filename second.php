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
<body background="">
    <br>

    <nav class="navbar navbar-expand-sm bg-dark bg-opacity-50">
    <div class="container">
      <a class="navbar-brand " href="mrb.jpg#"><img src="mrb.jpg" alt="" class="rounded-circle"
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
            <a class="nav-link text-light" href="second.php">New transaction</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-light" href="index.php">DOCUMENTS</a>
          </li>
          <a class="nav-link text-light" href="login.php">log out</a></i></button>
        </ul>
      </div>
    </div>
  </nav>
<br>

  <div class="container">
  <div class="mb-3">
  <div class="modal-body bg-light text-dark">
      <form action="mrb.php" method="post">
        Name: <input type="text" name="name" id="name"><br><br>
        task: <input type="text" name="task" id="task"><br><br>
        Date: <input type="date" name="bdate" id="bdate"><br><br>
        client: <input type="text" name="Client" id="clientid"><br><br>
        purpose: <input type="text" name="purpose" id="purpose"><br><br>
        Govt office involved: <input type="text" name="govt" id="govt"><br><br>
        Destination: <input type="text" name="Destination" id="Destination"><br><br>
        Duration time: <input type="time" name="duration" id="duration"><br><br>
        Fees/expenses: <input type="fees&expenses" name="fees&expenses" id="fees&expenses"><br><br>
        Proof of fees/expenses: <input type="text" name="Proof" id="Proof"><br><br>
        Receipt: <input type="file" name="Receipt" id="Receipt"><br><br>
        Remarks: <input type="text" name="Remarks" id="Remarks"><br><br>
        
        
      <div class="modal-footer">
      <button type="submit" value="Submit" name="submit"class="btn btn-outline-success">Submit</button>
      </div>
    </div>
  </div>
</div>
</div>
    </form><br><br>
        
      </div>
     
</body>
</html>
