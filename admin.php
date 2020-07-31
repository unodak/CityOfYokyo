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
                <li><a href="admin.php">Dashboard</a></li><br>
                <li><a href="admin-users.php">Users Panel</a></li><br>
                <li><a href="admin-staff.php">Staff Panel</a></li><br>
                <li><a href="admin-games.php">Games Panel</a></li><br>
                <li><a href="admin-email.php">Emails</a></li><br>
                <li><a href="admin-adverts.php">Adverts</a></li><br>

            </ul>
</nav> 
    </div>
    

    <div class= "grid">
        <div class= "header">
            
          
<h1>Administrator Dashboard</h1>
            <div class="icons">
                <form class="notificationicon-form" action="admin-comments.php"><button class="bell-icon-btn"><img class="notificationicon" src="nav/bell-solid.svg" alt="bellicon"></img> <?php 

$sql = "select * from comments;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    echo $resultCheck;
}

?><button></form>
                <form class="messageicon-form" action="admin-email.php"><button class="message-icon-btn"><img class="messageicon" src="nav/envelope-solid2.svg" alt="messageicon"></img>
                <?php 

                    $sql = "select * from email;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0) {
                        echo $resultCheck;
                    }
                    
                    ?>  
                
                <button></form>

                <form class="messageicon-form" action="includes/logout.inc.php"><button class="logout-icon-btn"><img class="usericon" src="nav/user-tie-solid.svg" alt="usericon">Logout</img><button></form><br> 
            </div>
        </div>


        <div class= "ticketstats">
            <table class = "tickettable">
                <tr>
                    <th>Ticket Stats <img class = "arrow" src="images/Arrow.png" alt="arrow"></img></th>
                </tr>
                <tr>
                    <th >Total ticket sales:</th>
                    <td>
                    <?php 

                    $sql = "select * from ticket;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0) {
                        echo $resultCheck;
                    }
                    
                    ?>                    
                    </td>



                </tr>
            </table>
        </div>

        <div class= "userstats">
            
        <table class= "tickettable">
                <tr>
                    <th>User Stats</th>
                </tr>
                <tr>
                    <th>Total user registration</th>

                    <td>
                    <?php 

                    $sql = "select * from users;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0) {
                        echo $resultCheck;
                    }
                    
                    ?>                    
                    </td>



                </tr>
            </table>

        </div>



        <div class= "gameschedule"><h1 class = "h1_tables">Games</h1> <br>

            <table class ="gametable">
                <tr class="tr_dash">
                    <th class="th_dash">Sport</th>
                    <th class="th_dash">Date</th>    
                    <th class="th_dash">Location</th>       
                </tr>
                <tr class="tr_dash">
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
            </table>    


        </div>

        <div class= "staffmenu"><h1 class = "h1_tables">Registered Staff</h1><br>

        <table class = "stafftable">
            <tr class="tr_dash">
            <th class="th_dash">Firstname</th>
            <th class="th_dash">Lastname</th>
            <th class="th_dash">Email</th>
            <th class="th_dash">Location</th>
</tr>
                    <td class="td_dash">
                    <?php $sql = "select * from staff;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['fnStaff'] . "<br>"; 
            
        }
}

?>
                    
                    </td>
                    
                    <td class="td_dash"> <?php $sql = "select * from staff;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['lnStaff'] . "<br>"; 
            
        }
}

?></td>
                    <td class="td_dash">
                    <?php $sql = "select * from staff;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['emailStaff'] . "<br>"; 
            
        }
}

?>
                    
                    </td>
                    <td class="td_dash">
                    <?php $sql = "select * from staff;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['locations'] . "<br>"; 
            
        }
}

?>
                    
                    </td>
                </tr>
        </table>    

        </div>
        <div class= "usermenu" ><h1 class = "h1_tables">User Menu<h1>

        <table class = "usertable">
                <tr class="tr_dash">
                    <th class="th_dash">Firstname</th>
                    <th class="th_dash">Lastname</th>    
                    <th class="th_dash">Email</th>      
                </tr>
               
                
                <tr class="tr_dash">
                    <td class="td_dash"><?php 

$sql = "select * from users;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['fnUsers'] . "<br>"; 
            
        }
}

?></td>
                    <td class="td_dash"><?php 

$sql = "select * from users;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['lnUsers'] . "<br>"; 
            
        }
}

?></td>
                    <td class="td_dash"><?php 

$sql = "select * from users;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['emailUsers'] . "<br>"; 
            
        }
}

?></td>
                </tr>
            </table> 

        
        </div>
    </div>
    


    
</body>
</html>