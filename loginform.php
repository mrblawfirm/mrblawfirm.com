

<?php
if(isset($_POST['username']) && isset($_POST['password'])){

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    
    return $data;
}
$username = validate($_POST['username']);
$password = validate($_POST['password']);

if(empty($username)){
    header("Location: 1st.php?error=Username is Required!");
    exit();
}
else if(empty($username)){
    $_SESSION['message2'] = "Password is Required!";            
    header("Location: 1st.php");
    exit();

}
else{
    $sql = "SELECT * FROM mrb WHERE username='$username' AND password='$password'";

    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['username'] === $username && $row['password'] === $password){
            header("Location: 1st.php");
        }
        else{
            $_SESSION['message'] = "Incorrect Username or Password!";
            header("Location: 1st.php");
            exit(0);
        }

    }
    else{
        $_SESSION['message'] = "Incorrect Username or Password!";
        header("Location: 1st.php");
        exit(0);

    }
}

}
else{
header("Location: 1st.php");
exit();
}


?>