<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>Registrationform</title>
<link rel= "stylesheet" type="text/css" href="stylesheets/styleforms.css">
</head>
<body>

    <div class= "registrationblock">

        <div class = "registrationform" > 

        <a href = "index.php"><img class = "cancel" src="nav/cross.svg" alt="cancel"></img></a>
            <img class = "logo" src="images/logo.png" alt="logo"></img><br><br>

            <?php

$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($fullUrl, "error=emptyfields")  == true) {

    echo '<p class= "error"> You did not fill in all the fields</p><br>';
}

else if (strpos($fullUrl, "error=invalid")  == true) {

    echo '<p class= "error">Invalid Email, make sure your email is structured as example@examplemail.com</p><br>';
}

else if (strpos($fullUrl, "error=invalidfname")  == true) {

    echo '<p class= "error">Invalid charectors used for firstname.</p><br>';
}

else if (strpos($fullUrl, "invalidlname")  == true) {

    echo '<p class= "error">Invalid charectors used for lastname.</p><br>';
}

else if (strpos($fullUrl, "error=passwordcheck")  == true) {

    echo '<p class= "error">Passwords do not match</p><br>';
}

else if (strpos($fullUrl, "error=sqlerror")  == true) {

    echo '<p class= "error">Sorry, there is an sql error. Please try log in again.</p><br>';
}

else if (strpos($fullUrl, "error=usertaken")  == true) {

    echo '<p class= "error">Sorry, the username is already taken.</p><br>';
}

?>



            <div class ="inputs">
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="email" placeholder="Email"> <br><br>
                <input type="text" name="firstname" placeholder="Firstname"> <br><br>
                <input type="text" name="lastname" placeholder="Lastname"> <br><br>
                <input type="password" name="pwd" placeholder="Password"> <br><br>
                <input type="password" name="pwd-repeat" placeholder="Repeat Password"> <br><br>
                </div>
                <p>By creating an account you agree to The City <br>
                of Yokyo's <a href="privacypolicy.pdf">Privacy Policy</a> and <a href="termsofservioce>">Terms of service</a></p><br>
                <button type="submit" name="signup-submit">SIGN UP</button><br><br>
                <p>Account a member? <a href="loginform.php">Sign in</a></p><br>
        </form>
        </div>
        

    </div>

    <img class = "registerimg" src="images/registerpic.png" alt="registerimg"></img>
    

</body>
</html>