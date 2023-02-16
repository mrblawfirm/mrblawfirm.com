<?php

    $con = mysqli_connect("localhost", "root", "", "lawfirm");

    if(!$con)
    {
        echo mysqli_connect_error();
    }
    else
    {
        //echo "Connected!";
    }

?>