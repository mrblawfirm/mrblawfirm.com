

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Mrb lawfirm</title>
</head>
<style>
    body{
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

</style>
<body background="">
  <br>
<div class="container">
        <div class="row">
<nav class="navbar navbar-expand-sm bg-dark bg-opacity-50">
    <div class="container">
      <a class="navbar-brand " href="mrb.jpg"><img src="mrb.jpg" alt="" class="rounded-circle"
          style="height:80px; width: 80px;"></a>
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
</div>
        </ul>
      </div>
    </div>
  </nav>
  
        <div class="container">
        <div class="row">
            <div class="col mb-">
                <table class="table table-bordered table-secondary table-striped text-center">
                <tr>
                  <br><br>
    <th>ID</th>
    <th>Name</th>
    <th>task</th>
    <th>Date</th>
    <th>client</th>
    <th>purpose</th>
    <th>govt office involved</th>
    <th>Destination</th>
    <th>Duration time</th>
    <th>Fees/expenses</th>
    <th>Proof of fees/expenses</th>
    <th>Receipt</th>
    <th>Remarks</th>
    <th>Action</th>
</tr>

<?php
    require "dbcon.php";
    $query = "SELECT * From mrb";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $mrb)
        {
            ?>
                <?php 
                $bdate = $mrb['bdate'];
                $age = date_diff(date_create($bdate), date_create('today'))->y;
                ?>
            <tr>
                <td><?php echo $mrb['id']; ?></td>
                <td><?php echo $mrb['name']; ?></td>
                <td><?php echo $mrb['task']; ?></td>
                <td><?php echo $mrb['bdate']; ?></td>
                <td><?php echo $age; ?></td>
                <td><?php echo $mrb['clientid']; ?></td>
                <td><?php echo $mrb['purpose']; ?></td>
                <td><?php echo $mrb['govt']; ?></td>
                <td><?php echo $mrb['destination']; ?></td>
                <td><?php echo $mrb['duration']; ?></td>
                <td><?php echo $mrb['fees&expenses']; ?></td>
                <td><?php echo $mrb['proof']; ?></td>
                <td><?php echo $mrb['Receipt']; ?></td>
                <td><?php echo $mrb['Remarks']; ?></td>
                
                <td>
                    <form action="mrb.php" method="post">
                        <button type="submit" class="btn btn-dark" name="view" value="<?php echo $mrb['id']; ?>"><i class="bi bi-eye"></i>View</button>
                        <button type="submit" class="btn btn-primary" name="edit" value="<?php echo $mrb['id']; ?>"><i class="bi bi-pencil-square"></i>Edit</button>
                        <button type="submit" class="btn btn-danger" name="delete" value="<?php echo $mrb['id']; ?>"><i class="bi bi-trash3"></i>Delete</button>
                    </form>
                </td>
                </tr>
                <?php
            }
        }
        else
        {
            echo "<tr><td colspan='6'>No data found.</td></tr>";
        }
    
    ?>
    </tr>
    
                  </table>
            </div>
        </div>
</body>
</html>