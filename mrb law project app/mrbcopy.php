<?php 
    require 'dbcon.php';
{        

    if(isset($_POST["submit"]))
    {
        $name = $_POST["name"];
        $name = $_POST['name'];
        $task = $_POST['task'];
        $bdate = $_POST['bdate'];
        $clientid = $_POST['clientid'];
        $purpose = $_POST['purpose'];
        $govtinvolved = $_POST['govt involved '];
        $destination = $_POST['destination'];
        $durationtime = $_POST['duration time'];
        $feesexpenses = $_POST['fees/expenses'];
        $proofoffeesexpenses = $_POST['proof of fees/expenses'];
        $Receipt = $_POST['Receipt'];
        $Remarks = $_POST['Remarks'];

        $sql = "INSERT INTO `tasks` (`name`, `task`, `bdate`, `clientid`, `purpose`, `govtinvolved`, `destination`, `durationtime`, `feesexpenses`, `proofoffeesexpenses`, `Receipt`, `Remarks
        `) VALUES ('$name', '$task', '$bdate', '$clientid', '$purpose
        ', '$govtinvolved', '$destination', '$durationtime', '$feesexpenses
        ', '$proofoffeesexpenses', '$Receipt', '$Remarks')";
        $query = $conn->prepare($sql);
        $query->execute();
        $id = $conn->lastInsertId();
        echo $id;
        echo $name;
        echo $task;
        echo $bdate;
        echo $clientid;
        echo $purpose;
        echo $govtinvolved;
        echo $destination;
        echo $durationtime;
        echo $feesexpenses;
        echo $proofoffeesexpenses;
        echo $Receipt;
        echo $Remarks;
    }
    else
    {
        $name = $_GET['name'];
        $task = $_GET['task'];
        $bdate = $_GET['bdate'];
        $clientid = $_GET['clientid'];
        $purpose = $_GET['purpose'];
        $govtinvolved = $_GET['govtinvolved'];
        $destination = $_GET['destination'];
        $durationtime = $_GET['duration time'];
        $feesexpenses = $_GET['feesexpenses'];
        $proofoffeesexpenses = $_GET['proof of fees/expenses'];
        $Receipt = $_GET['Receipt'];
        $Remarks = $_GET['Remarks'];
        $sql = "SELECT * FROM `tasks` WHERE `name` = '$name' AND
        `task` = '$task' AND `bdate` = '$bdate' AND `
        `clientid` = '$clientid' AND `purpose` = '$purpose' AND
        `govtinvolved` = '$govtinvolved' AND `destination` = '$
        destination' AND `durationtime` = '$durationtime' AND
        `feesexpenses` = '$feesexpenses' AND `proofoffeese
        expenses` = '$proofoffeesexpenses' AND `Receipt` = '$Receipt
               'AND `Remarks` = '$Remarks' LIMIT 1";
                $query = $conn->prepare($sql);
                $query->execute();
                $row = $query->fetch(PDO::FETCH_OBJ);
                $id = $row->id;
                echo $id;
                echo $name;
                echo $task;
                echo $bdate;
                echo $clientid;
                echo $purpose;
                echo $destination;
                echo $durationtime;
                echo $feesexpenses;
                echo $proofoffeesexpenses;
                echo $Receipt;
                echo $Remarks;
    }
     $conn->close();
     header("Location: index.php");
     exit();
    {
     $sql = "INSERT INTO `tasks` (`name`, `task`, `bdate`, `clientid`, `purpose`, `govtinvolved`, `destination`, `durationtime`, `feesexpenses`, `proofoffeesexpenses`, `Receipt`, `Remarks
        `) VALUES ('$name', '$task', '$bdate', '$clientid', '$purpose
        ', '$govtinvolved', '$destination', '$durationtime', '$feesexpenses
        ', '$proofoffeesexpenses', '$Receipt', '$Remarks')";
        $query = $conn->prepare($sql);
        $query->execute();
        $id = $conn->lastInsertId();
        echo $id;

        $sql = "INSERT INTO `tasks` (`name`, `task`, `bdate`, `clientid`, `purpose`, `govtinvolved`, `destination`, `durationtime`, `feesexpenses`, `proofoffeesexpenses`, `Receipt`, `Remarks
        `) VALUES ('$name', '$task', '$bdate', '$clientid', '$purpose
        ', '$govtinvolved', '$destination', '$durationtime', '$feesexpenses
        ', '$proofoffeesexpenses', '$Receipt', '$Remarks')";
        $query = $conn->prepare($sql);
        $query->execute();
        $id = $conn->lastInsertId();
        echo $id;
        echo $name;
        echo $task;
        echo $bdate;
        echo $clientid;
        echo $purpose;
        echo $destination;
        echo $durationtime;
        echo $feesexpenses;
        echo $proofoffeesexpenses;
        echo $Receipt;
        echo $Remarks;
    }
    $conn->close();
    header("Location: index.php");
    exit();
}