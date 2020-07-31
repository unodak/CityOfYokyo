<?php
    require 'includes/dbh.inc.php';
  
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>Ticket Registration Form</title>
<link rel= "stylesheet" type="text/css" href="stylesheets/styleforms.css">
</head>
<body>

    <div class= "registrationblock">

        <div class = "registrationform" > 

        <a href = "spectators.php"><img class = "cancel" src="nav/cross.svg" alt="cancel"></img></a>
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

else if (strpos($fullUrl, "error=sqlerror")  == true) {

    echo '<p class= "error">Sorry, there is an sql error. Please try log in again.</p><br>';
}

else if (strpos($fullUrl, "error=toomanyusers")  == true) {

    echo '<p class= "error">Sorry, Sorry the tickets are finished.</p><br>';
}


?>

                <form action="includes/ticket.inc.php" method="post">
                
                <select name ="sport">
                        <option value="none">None</option>
                        <option value="tennis">Tennis</option>
                        <option value="football">Football</option>
                        <option value="swimming">Swimming</option>
                    </select><br><br>
                    <input type="date" name="date" placeholder="date"> <br><br>
                    <input type="text" name="email" placeholder="Email"> <br><br>
                    <input type="text" name="firstname" placeholder="Firstname"> <br><br>
                    <input type="text" name="lastname" placeholder="Lastname"> <br><br>
                    <input type="text" name="number" placeholder="Number"> <br><br>
                    <input type="text" name="address" placeholder="Address"> <br><br>
                    <select name= "paymentType">
                        <option value="paymentType">Payment Type</option>
                        <option value="visa">Visa</option>
                        <option value="mastercard">Mastercard</option>
                        <option value="paypal">Paypal</option>
                        <option value="cash">Cash</option>
                    </select><br><br>
                    <button type="submit" name="register">REGISTER</button><br><br>
                
                </form>
        </div>

    </div>

    <img class = "watchimg" src="images/watch.png" alt="watchimg"></img>
    

</body>
</html>