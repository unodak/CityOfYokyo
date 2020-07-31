<?php
if (isset($_POST['login-submit'])) {

    require 'dbh.inc.php';

    $email = $_POST["email"]; 
    $password = $_POST["pwd"];

        if (empty($email) || empty($password) ) {

            header("Location: ../loginform.php?error=emptyfields");
            exit();
        }

else {

    $sql = "SELECT * FROM users WHERE emailUsers =?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {

    header("Location: ../loginform.php?error=sqlerror");
    exit();

    }

else {
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($password, $row['pwdUsers']);

        if ($pwdCheck == false) {

            header("Location: ../loginform.php?error=wrongpwd");
            exit();

        }

        else if ($pwdCheck == true){

                if ($email == 'nodi@gmail.com'){
            session_start();
            $_SESSION['email'] = $row['emailUsers'];
          

            header("Location: ../admin.php?login=success");
 
                }

                else  {
                    session_start();
            $_SESSION['email'] = $row['emailUsers'];
          

            header("Location: ../user.php?login=success");
                }
            

        }

        

        else {

            header("Location: ../loginform.php?error=wrongpwd");
            exit();

        }
            
    }

    else {

        header("Location: ../loginform.php?error=nouser");
        exit();

    }


}
}
}

else {
    header("Location: ../index.php");
        exit();
    
}

