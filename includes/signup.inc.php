<?php

if (isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';

    $email =  $_POST['email'];
    $firstname =  $_POST['firstname'];
    $lastname =  $_POST['lastname'];
    $password =  $_POST['pwd'];
    $passwordRepeat =  $_POST['pwd-repeat'];

    if (empty($email) || empty($firstname) || empty($lastname) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../registrationform.php?error=emptyfields&email=".$email."&fname=".$firstname."&lname=".$lastname);
        exit();

    }

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/", $firstname) && !preg_match("/^[a-zA-Z]*$/", $lastname)) {
        header("Location: ../registrationform.php?error=invalid&emailfname");
        exit();
    }

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../registrationform.php?error=invalid&fname=".$firstname."&lname=".$lastname);
        exit();
    }

    else if (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
        header("Location: ../registrationform.php?error=invalidfname=".$email."&lname=".$lastname);
        exit();
    }

    else if (!preg_match("/^[a-zA-Z]*$/", $lastname)) {
        header("Location: ../registrationform.php?error=invalidlname=".$email."&lname=".$firstname);
        exit();
    }

    else if ($password !== $passwordRepeat) {
        header("Location: ../registrationform.php?error=passwordcheck&email=".$email."&fname=".$firstname."&lname=".$lastname);
        exit();

    }

    else {
        
        $sql = "SELECT emailUsers FROM users WHERE emailUsers=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../registrationform.php?error=sqlerror");
        exit();
        }

        else {
            
            mysqli_stmt_bind_param($stmt, "s" , $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0){
                header("Location: ../registrationform.php?error=usertaken&fname=".$firstname."&lname=".$lastname);
        exit();
            }
else {
    $sql = "INSERT INTO users (emailUsers, fnUsers, lnUsers, pwdUsers) VALUES (?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../registrationform.php?error=sqlerror");
    exit();
    }

    else {
        $hashedPwd =password_hash($password, PASSWORD_DEFAULT);


        mysqli_stmt_bind_param($stmt, "ssss" , $email, $firstname, $lastname, $hashedPwd);
            mysqli_stmt_execute($stmt);
            header("Location: ../loginform.php?signup=success");
    exit();

    }
}
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

else {
    header("Location: ../registrationform.php");
    exit();

}
