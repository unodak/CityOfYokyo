<?php

if (isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';

    $sport =  $_POST['sport'];
    $gameday =  $_POST['gameday'];
    $location =  $_POST['location'];
    

    if (empty($sport) || empty($gameday) || empty($location)) {
        header("Location: ../registrationform.php?error=emptyfields");
        exit();

        else {
        
            $sql = "SELECT emailUsers FROM users WHERE emailUsers=?";
            $stmt = mysqli_stmt_init($conn);
    
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../registrationform.php?error=sqlerror");
            exit();
            }
    

        }

    