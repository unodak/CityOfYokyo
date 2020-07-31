<?php

require 'includes/dbh.inc.php';
session_start();

$email= $_SESSION['email'];

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

            <?php


    $emailUsers = $_SESSION['email'] ;

?>

    
    <div class= "myProfile_class"><h1>My Profile</h1>

        <table class ="gametable">
                <tr class="tr_dash">
                    <th class="th_dash">User ID</th>
                    <th class="th_dash">Email</th>  
                    <th class="th_dash">Name</th>   
                    <th class="th_dash">Surname</th>           
                </tr>
                <tr class="tr_dash">
                        <td class="td_dash"><?php 

$sql = "select * from users WHERE emailUsers = '$emailUsers';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['uid'] . "<br>"; 
            
        } 
        }


?></td>
<td class="td_dash"><?php 

$sql = "select * from users WHERE emailUsers = '$emailUsers';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['emailUsers'] . "<br>"; 
            
        } 
        }


?></td>

<td class="td_dash"><?php 

$sql = "select * from users WHERE emailUsers = '$emailUsers';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['fnUsers'] . "<br>"; 
            
        } 
        }


?></td>

<td class="td_dash"><?php 

$sql = "select * from users WHERE emailUsers = '$emailUsers';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['lnUsers'] . "<br>"; 
            
        } 
        }


?></td>

                </tr>
            </table>   <br>

            <div class = "editProfile">
            <form class="editProfile-btn-form" action="#">
                <button class="editProfile-btn">Edit Profile</button>
            </form>

            </div>
    </div>
    <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <div class="contactitle">
                <h1>Contact Us</h1>
            </div>

            <div class="contactheader">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,<br> 
                sed diam.</p>
            </div>    

            <div class = "contactusform" >  
                <form class = "contactform"  action="includes/email2.inc.php" method="post">
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="email" placeholder="Email"> <br><br>
                    <textarea name="message" placeholder="Write your message"></textarea> <br>
                    <button type="submitform" name="submitform">Submit</button>
                </form>
            </div>   
            
            
            <div class = "contactinfo">
                <h1>INFORMATION</h1><br><br>
                <img class = "locationcontact" src="nav/map-marker-alt-solid-b.svg" alt="marker"></img>Lorem ipsum dolor sit ame <br>
                <img class = "numbercontact" src="nav/phone-solid.svg" alt="phone"></img>  +267 9876543 / +267 8976543 <br>
                <img class = "faxcontact" src="nav/fax-solid.svg" alt="fax"></img>  +267 9876543 <br>
                <img class = "emailcontact" src="nav/envelope-solid.svg" alt="envelope"></img>  info@funolympicgames.com <br>

                <img class = "backgroundcontact" src="images/contactpic.png" alt="logo"></img>
            </div>      
        </div>

            </div>

            
    


    
</body>
</html>