<?php 
    require 'dbcon.php';

    if(isset($_POST["submit"]))
    {
      $name = $_POST['name'];
      $task = $_POST['task'];
      $bdate = $_POST['bdate'];
      $clientid = $_POST['clientid'];
      $purpose = $_POST['purpose'];
      $govt = $_POST['govt'];
      $destination = $_POST['destination'];
      $duration = $_POST['duration'];
      $feesexpenses = $_POST['fees&expenses'];
      $proof = $_POST['proof'];
      $Receipt = $_POST['Receipt'];
      $Remarks = $_POST['Remarks'];

      $query = "INSERT INTO `mrb`(`id`, `name`, `task`, `bdate`, `clientid`, `purpose`, `govt`, `destination`, `duration`, `fees&expenses`, `proof`, `Receipt`, `Remarks`) 
        VALUES (NULL, '$name', '$task', '$bdate', '$clientid', '$purpose', '$govt', '$destination', '$duration', '$feesexpenses', '$proof', '$Receipt', '$Remarks')";
    
      $query_run = mysqli_query($con, $query);

        if(!$query_run)
        {
            echo "mrb not submited.";
        }
        else
        {
            header("Location: index.php");
        }
    }

    if(isset($_POST['edit']))
    {
        $mrb_id = $_POST['edit'];
        header("Location: edit mrb.php?id=$mrb_id");
    }

    if(isset($_POST["update"]))
    {
      $mrb_id = $_POST['mrb_id'];

      $name = $_POST['name'];
      $task = $_POST['task'];
      $bdate = $_POST['bdate'];
      $clientid = $_POST['clientid'];
      $purpose = $_POST['purpose'];
      $govt = $_POST['govt'];
      $destination = $_POST['destination'];
      $duration = $_POST['duration'];
      $feesexpenses = $_POST['fees&expenses'];
      $proof = $_POST['proof'];
      $Receipt = $_POST['Receipt'];
      $Remarks = $_POST['Remarks'];

      $query = "UPDATE mrb
     SET `name` = '$name', `task` = '$task', `bdate`= '$bdate', `clientid` = '$clientid', `purpose` = '$purpose', `govt` = '$govt', `destination` = '$destination', `duration` = '$duration', `fees&expenses` = '$feesexpenses ', `proof` = '$proof', `Receipt` = '$Receipt', `Remarks` 
     = '$Remarks' WHERE `id` = $mrb_id";
                   
        $query_run = mysqli_query($con, $query);

        if(!$query_run)
        {
            echo "Update failed!";
        }
        else
        {
            header("Location: index.php");
        }
    }

    if(isset($_POST['delete']))
    {
        $mrb_id = $_POST['delete'];

        $query = "DELETE FROM mrb WHERE id='$mrb_id'";
        $query_run = mysqli_query($con, $query);

        if(!$query_run)
        {
            echo "mrb not deleted!";
        }
        else
        {
            header("Location: index.php");
        }

    }

    if(isset($_POST['view']))
    {
        $mrb_id = $_POST['view'];
        header("Location: view mrb.php?id=$mrb_id");
    }

    if(isset($_POST["update"]))
    {
      $mrb_id = $_POST['mrb_id'];

      $name = $_POST['name'];
      $task = $_POST['task'];
      $bdate = $_POST['bdate'];
      $clientid = $_POST['clientid'];
      $purpose = $_POST['purpose'];
      $govt = $_POST['govt'];
      $destination = $_POST['destination'];
      $duration = $_POST['duration'];
      $feesexpenses = $_POST['fees&expenses'];
      $proof = $_POST['proof'];
      $Receipt = $_POST['Receipt'];
      $Remarks = $_POST['Remarks'];
       

        $query = "UPDATE mrb
                    SET `id`='$id',`name`='$name',`task`='$task',`bdate`='$bdate',`clientid`='$clientid',`purpose`='$purpose',`govt`='$govt',`destination`='$destination',`duration`='$duration',`fees&expenses`='$feesexpenses',`proof`='`$proof',`Receipt`='`$Receipt',`Remarks`='$Remarks' 
                    WHERE id='$mrb_id'";
        $query_run = mysqli_query($con, $query);

        if(!$query_run)
        {
            echo "Update failed!";
        }
        else
        {
            header("Location: index.php");
        }
    }

    if(isset($_POST['cancel'])){

      $mrb_id = $_POST['mrb_id'];
      $name = $_POST['name'];
      $task = $_POST['task'];
      $bdate = $_POST['bdate'];
      $clientid = $_POST['clientid'];
      $purpose = $_POST['purpose'];
      $govt = $_POST['govt'];
      $destination = $_POST['destination'];
      $duration = $_POST['duration'];
      $feesexpenses = $_POST['fees&expenses'];
      $proof = $_POST['proof'];
      $Receipt = $_POST['Receipt'];
      $Remarks = $_POST['Remarks'];

     $query = "SELECT `id`, `name`, `task`, `bdate`, `clientid`, `purpose`, `govt`, `destination`, `duration`, `fees&expenses`, `proof`, `Receipt`, `Remarks` 
    
     FROM `mrb` WHERE id='$mrbps_id'";
     
        $query_run = mysqli_query($con, $query);
        if(!$query_run)
        {
            echo "Update failed!";
        }
        else
        {
            header("Location: index.php");
        }
    }

?>