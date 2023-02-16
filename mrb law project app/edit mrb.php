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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css
" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js
" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body background="">
    
    <?php 
    
    require "dbcon.php";

    $mrb_id = $_GET['id'];
    $query = "SELECT * From mrb WHERE id='$mrb_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        $mrb = mysqli_fetch_array($query_run);

        ?>

        <form action="mrb.php" method="post">
        <input type="hidden" name="mrb_id" value="<?php echo $mrb['id']; ?>">
            <input type="hidden" name="mrb_id" value="<?php echo $mrb['id']; ?>">
            <div class="container p-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Details</h5>
                    <div class="card-body">
                      <div class="row">
                        <label for="exampleFormControlInput1" class="form-label">Staff Name:</label>
            <input type="text" class="form-control"value="<?php echo $mrb['name']; ?>" id="name" name="name" placeholder="Enter Name:" >
            <br><br>
            <label for="exampleFormControlInput1" class="form-label">Task:</label>
            <input type="task" class="form-control" value="<?php echo $mrb['task']; ?>" id="task" name="task" placeholder="task ">
            <br><br>
            <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label">Birthday:</label>
            <input type="date" class="form-control "value="<?php echo $mrb['bdate'];?>" id="bdate" name="bdate" placeholder="Enter Name:" >
            </div>
            <label for="exampleFormControlInput1" class="form-label">Client name:</label>
            <input type="text" class="form-control"value="<?php echo $mrb['clientid']; ?>" id="clientid" name="client name" placeholder="Enter Name:" >
            <br><br>
            <label for="exampleFormControlInput1" class="form-label">Purpose:</label>
            <input type="text" class="form-control"value="<?php echo $mrb['purpose']; ?>" id="purpose" name="purpose" placeholder="Enter Purpose:" >
            <br><br>
            <label for="exampleFormControlInput1" class="form-label">Govt involved:</label>
            <input type="text" class="form-control"value="<?php echo $mrb['govt']; ?>" id="govt" name="govt involved" placeholder="Enter govt involved:" >
            <br><br>
            <label for="exampleFormControlInput1" class="form-label">Destination:</label>
            <input type="location" class="form-control"value="<?php echo $mrb['destination']; ?>" id="destination" name="destination" placeholder="Enter Destination:" >
            <br><br>
            <label for="exampleFormControlInput1" class="form-label">Duaration Time:</label>
            <input type="time" class="form-control"value="<?php echo $mrb['duration']; ?>" id="duration" name="duration time" placeholder="Enter time:" >
            <br><br>
            <label for="exampleFormControlInput1" class="form-label">Fees/expenses:</label>
            <input type="text" class="form-control"value="<?php echo $mrb['fees&expenses']; ?>" id="fees&expenses" name="fees&expenses" placeholder="fees&expenses:" >
            <br><br>
            <label for="exampleFormControlInput1" class="form-label">Proof of fees/expenses:</label>
            <input type="payment" class="form-control"value="<?php echo $mrb['proof']; ?>" id="proof" name="proof of fees/expenses" placeholder="proof of feesexpenses:" >
            <br><br>
            <label for="exampleFormControlInput1" class="form-label">Receipt:</label>
            <input type="file" class="form-control"value="<?php echo $mrb['Receipt']; ?>" id="Receipt" name="Receipt" placeholder=" picture:" >
            <br><br>
            <label for="exampleFormControlInput1" class="form-label">Remarks:</label>
            <input type="text" class="form-control"value="<?php echo $mrb['Remarks']; ?>" id="Remarks" name="Remarks" placeholder="Enter others:" >
            <br><br>
            
        
                      </div>
                      
                    </div>
                     <div class="card-footer text-end">
                        <a href="index.php"><input type="submit" value="Cancel" name="cancel" class="btn btn-secondary text-light"></a>
                        <input type="submit" value="Update" name="update" class="btn btn-success text-light">
                       
                     </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
           
        </form><br><br>

        <?php

    }
    else
    {
        echo "No data found.";
    }
    
    ?>

</body>
</html>