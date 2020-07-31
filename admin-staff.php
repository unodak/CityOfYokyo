<?php

require 'includes/dbh.inc.php';
include 'includes/staff2.inc.php';
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>Admin-staff</title>
<link rel= "stylesheet" type="text/css" href="stylesheets/dash2.css">
</head>
<style>

</style>
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
                <li><a href="admin-games.php">Users Panel</a></li><br>
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

?></button></form>
                <form class="messageicon-form" action="admin-email.php"><button class="message-icon-btn"><img class="messageicon" src="nav/envelope-solid2.svg" alt="messageicon"></img>
                <?php 

                    $sql = "select * from email;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0) {
                        echo $resultCheck;
                    }
                    
                    ?>  
                
                </button></form>

                <form class="messageicon-form" action="includes/logout.inc.php"><button class="logout-icon-btn"><img class="usericon" src="nav/user-tie-solid.svg" alt="usericon">Logout</img></button></form><br> 
            </div>
        </div>

        

  


        <div class= "staff_class">
        <h1 class = "h1_tables">Staff</h1>
<?php

         echo " <form method='post' action='".setStaff($conn)."'>
         
         <input class = 'staff_input' type='text' name='fnStaff' placeholder='Name'><br>
         <input class = 'staff_input' type='text' name='lnStaff' placeholder='Lastname'><br>
         <input class = 'staff_input' type='text' name='emailStaff' placeholder='Email address'><br>
         <select class = 'staff_select' id='location' name='locations'>
            <option value='Stadium of Delight'>Stadium of Delight</option>
            <option value='Aquatics Palace'>Aquatics Palace</option>
            <option value='Fun Olympic Village'>Fun Olympic Village</option>
       </select><br>
          <button class = 'staff_button' type='submit' name='staffSubmit'>Submit</button><br>
          </form><br>
          
          ";
          
          getStaff($conn);

          ?>



        </div>
        </div>
    </div>


</body>
</html>