<?php
    include_once 'includes/dbh.inc.php';
?>    
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel= "stylesheet" type="text/css" href="styleheader.css">
</head>
<body>

    
        <!-- WEBSITE BODY -->

        <div class="grid">
            <div class="menu">                
                    <img class = "logo" src="images/logo.png" alt="logo"></img>

                    <div class ="rightalign">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="sports.php">Sports</a></li>
                            <li><a href="spectators.php">Spectators</a></li>
                            <li><a href="#contactlink">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="buttons">

                        <form>
                        <button class= "loginbtn" type="loginbtn" name="loginform.php">Sign In</button>
</form>

                        <form>
                        <button class= "registerbtn" type="register" name="registrationform.php">Sign Up</button> 
</form>



                    </div>
            </div>

</grid>