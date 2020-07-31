<?php

require 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>Fixtures</title>
<link rel= "stylesheet" type="text/css" href="stylesheets/style.css">
<link rel= "stylesheet" type="text/css" href="stylesheets/fixturestyle.css">
</head>
<body>
<div class="wrapper">

    <!-- WEBSITE BODY -->

        <div class="grid">
        <div class="menu">                
                    <a href="index.php"><img class = "logo" src="images/logo.png" alt="logo"></img></a>

                    <div class ="rightalign">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="fixtures.php">Fixtures</a></li>
                            <li><a href="spectators.php">Spectators</a></li>
                            <li><a href="index.php#contactlink">Contact Us</a></li>
                        </ul>
                    </div>

                    <form></form>

                    <div class="buttons">

         
                <form class"loginform"  action="loginform.php" method="post">
                        <button class= "loginbtn" type="loginbtn" name="loginform.php">Sign In</button>
</form>

                        <form class"registerform"  action="registrationform.php" method="post">
                        <button class= "registerbtn" type="register" name="registrationform.php">Sign Up</button> 
</form>

                    </div>

                    
        </div>


            </div>
  
        </div>
        <div class="fixtureheader"></div>
        <div class = "fixtures">
<h1 class="f_h1">Fun Olympic Games Fixture Dates</h1><br>
<p class ="f_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure <br>
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non <br>
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Uhm
                </p>
</div>

<div class="gameschedule">
    <table class="gametable">
        <tr>
            <th>Sport</th>
            <th>Date</th>
            <th>Location</th>
        </tr>
        <tr>
        <td><?php 

$sql = "select * from gameschedule;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['sport'] . "<br>"; 
            
        }
}

?></td>
<td><?php 

$sql = "select * from gameschedule;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['gameday'] . "<br>"; 
            
        }
}

?></td>
<td><?php 

$sql = "select * from gameschedule;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['location'] . "<br>"; 
            
        }
}

?></td>

        </tr>
        
    </table>

</div>
<?php
            require "footer.php";

        ?>



</div>
</body>
</html>