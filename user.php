<?php

require 'includes/dbh.inc.php';
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title></title>
<link rel= "stylesheet" type="text/css" href="stylesheets/dash2.css">
</head>
<body>




    <div class="menu">                
        <nav>
            <img class = "logo" src="images/logo.png" alt="logo"></img><br>
            <img class = "user_icon" src="nav/user.png" alt="logo"></img><br>
            
            <?php
    if (isset($_SESSION['email'])) {

        echo '<p class = "user_p">User: '.$_SESSION["email"]. '</p>';

    }

    else {
       echo '<p>you are logged out!</p>';
    
    }

?>
            <ul>
                <li><a href="user.php">Dashboard</a></li><br>
                <li><a href="myGames.php">My Games</a></li><br>
                <li><a href="sportReg.php">Sign Up for Games</a></li><br>
                <li><a href="myProfile.php">My Profile</a></li><br>

            </ul>
</nav> 
    </div>
    

    <div class= "grid">
        <div class= "header">
            
        <h1>User Dashboard</h1>

       
        <div class="icons">
                <form class="messageicon-form" action="includes/logout.inc.php"><button><img class="usericon" src="nav/user-tie-solid.svg" alt="usericon">Logout</img><button></form><br> 
            </div>
        </div>
      

            <div class= "userdash_class"><h1>Games</h1> <br><br>

            <p class ="welcome_dash">Below you will find a list of all available games, this games will be running from x to x. <br>
            And registrations are still on going, If you any that you would like to participate in please<br>
             note down the details and click on the registration but below the table to secure your spot!</p><br>

            <table class ="gametable">
                <tr class="tr_dash">
                    <th class="th_dash">Sport</th>
                    <th class="th_dash">Date</th>    
                    <th class="th_dash">Location</th>       
                </tr>
                <tr class="tr_dash"">
                        <td class="td_dash"><?php 

$sql = "select * from gameschedule;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['sport'] . "<br>"; 
            
        }
}

?></td>
<td class="td_dash"><?php 

$sql = "select * from gameschedule;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['gameday'] . "<br>"; 
            
        }
}

?></td>
<td class="td_dash"><?php 

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
            </table>   <br>

            <div class = "sportReg">
            <form class="sportReg-btn-form" action="sportReg.php">
                <button class="sportReg-btn">Register for a sport</button>
            </form>


        </div>


    


    
</body>
</html>