
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>MRB LAW FIRM</title>
    <style>
   
</style>
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
    
<div class="container p-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Details</h5>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                            <p class="card-text col-6"> <b>Name:</b>  <?= $mrb['name']; ?></p>
                            <p class="card-text col-6"><b>Task:</b>  <?= $mrb['task']; ?></p>
                            <p class="card-text col-6"><b>Date:</b>
                            <?php 
                                $bdate = $mrb['bdate'];
                                $age = date_diff(date_create($bdate), date_create('today'))->y;
                            ?> 
                            <?php echo $age; ?> Years old</p>
                            <p class="card-text col-6"> <b>Client:</b>  <?= $mrb['clientid']; ?></p>
                            <p class="card-text col-6"><b>Purpose:</b>  <?= $mrb['purpose']; ?></p>
                            <p class="card-text col-6"> <b>Govt office involved:</b>  <?= $mrb['govt']; ?></p>
                            <p class="card-text col-6"><b>Destination:</b>  <?= $mrb['destination']; ?></p>
                            <p class="card-text col-6"> <b>Duration time:</b>  <?= $mrb['duration']; ?></p>
                            <p class="card-text col-6"><b>Fees/expenses:</b>  <?= $mrb['fees&expenses']; ?></p>
                            <p class="card-text col-6"><b> Proof of Fees/expenses:</b>  <?= $mrb['proof']; ?></p>
                            <p class="card-text col-6"> <b>Acknowledgement Receipt:</b>  <?= $mrb['Receipt']; ?></p>
                            <p class="card-text col-6"> <b>Remarks:</b>  <?= $mrb['Remarks']; ?></p>
                        </div>
                      </div>
                     <div class="card-footer text-end">
                        <a href="index.php" class="btn btn-secondary">Go back</a>
                     </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <?php

}
else
{
    echo "No data found.";
}

?>
       

</body>
</html>