<?php

session_start();


if (isset($_POST['submitform'])) {

    require 'dbh.inc.php';

    $name = $_POST["name"];
    $email = $_POST["email"]; 
    $message = $_POST["message"];

        if (empty($name) || empty($email) || empty($message) ) {

            header("Location: ../myProfile.php?error=emptyfields");
            exit();
        }

else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/", $name) ) {
    header("Location: ../myProfile.php?error=invalid&emailnamemessage");
    exit();
}

else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../myProfile.php?error=invalid&fname=".$name."&message=".$message);
    exit();
}



else if (!preg_match("/^[a-zA-Z]*$/", $name)) {
    header("Location: ../myProfile.php?error=invalidname=".$email."&message=".$message);
    exit();
}



else {
    $sql = "INSERT INTO email (name, email, message) VALUES (?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../myProfile.php?error=sqlerror");
    exit();
    }

    else {

        mysqli_stmt_bind_param($stmt, "sss" , $name, $email, $message);
            mysqli_stmt_execute($stmt);
            header("Location: ../myProfile.php?email=success");
    exit();

    }

}





mysqli_stmt_close($stmt);
mysqli_close($conn);
}