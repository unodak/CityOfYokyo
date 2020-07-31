<<?php
    require 'includes/dbh.inc.php';
    session_start();
?>
!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>Loginform</title>
<link rel= "stylesheet" type="text/css" href="stylesheets/styleforms.css">
</head>
<body>

    <div class= "registrationblock">
    
        <a href = "index.php"><img class = "cancel" src="nav/cross.svg" alt="cancel"></img></a>
        <img class = "logo" src="images/logo.png" alt="logo"></img><br><br><br>

        <?php

$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($fullUrl, "error=emptyfields")  == true) {

    echo '<p class= "error"> You did not fill in all the fields</p><br>';
}

else if (strpos($fullUrl, "error=sqlerror")  == true) {

    echo '<p class= "error">Sorry, there is an sql error. Please try log in again.</p><br>';
}

else if (strpos($fullUrl, "error=wrongpwd")  == true) {

    echo '<p class= "error">Incorrect Password!</p><br>';
}

else if (strpos($fullUrl, "error=nouser")  == true) {

    echo '<p class= "error">Not yet a user, Please create an account.</p><br>';
}


?>



        <div class = "registrationform" >  
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="email" placeholder="Email"> <br><br>
                <input type="password" name="pwd" placeholder="Password"> <br><br>
                <input class="radio" type="radio" name="keepmeloggedin" value="keepmelogged in"> 
                <p class="logininfo">Keep me logged in</p>
                <p class="logininfo2">Forgot your password?</p><br><br>
                <p>By logging in, you agree to The City of Yokyo's <br>
                <a href="privacypolicy.doc">Privacy Policy</a> and <a href="termsofuse.pdf">Terms of Use</a></p><br>
                <button type="submit" name="login-submit">Log In</button><br><br>
                <p>Not a member? <a href="registrationform.php">Join Now</a></p><br>
            </form>

            


        </div>

    </div>

    <img class = "loginimg" src="images/loginpic.png" alt="registerimg"></img>
    

</body>
</html>