<?php

include 'includes/dbh.inc.php';
include 'includes/gameschedule.inc.php';




?>
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title></title>
<link rel= "stylesheet" type="text/css" href="stylesheets/dash2.css">
</head>
<style>

}</style>
<body>
<div class="menu">                
        <nav>
            <img class = "logo" src="images/logo.png" alt="logo"></img><br>
            <ul>
                <li><a href="admin.php">Dashboard</a></li><br>
                <li><a href="#">Users Panel</a></li><br>
                <li><a href="#">Staff Panel</a></li><br>
                <li><a href="#">Games Panel</a></li><br>
                <li><a href="#">Emails</a></li><br>
                <li><a href="#">Adverts</a></li><br>

            </ul>
        <nav> 
    </div>

    <div class= "grid">
        <div class= "header">
   
<div class="icons">
                <img class="notificationicon" src="nav/bell-solid.svg" alt="bellicon"></img>
                <img class="messageicon" src="nav/envelope-solid2.svg" alt="messageicon"></img>
                <img class="usericon" src="nav/user-tie-solid.svg" alt="usericon"></img><br> 
            </div>
        </div>

        <div class = "search">
            <form>
            <input type="text" name="search" placeholder="Search">
            </form>
        </div>



        <div class= "gameschedule">
<?php

if (isset($_POST['edit-btn'])) {

$sportId = $_POST['sportId'];
$sport = $_POST['sport'];
$gameday = $_POST['gameday'];
$location = $_POST['location'];


echo "Its working";
}

         echo " <form method='post' action='gameschedule.inc.php'>
         <input type = 'hidden' name='sportId' value='".$sportId."'>
         <input type = 'text' name='sport' value='".$sport."'>
         <input type = 'text' name='gameday' value='".$gameday."'>
         <input type = 'text' name='location' value='".$location."'>
         <br>
         <button type ='submit' name='gameEdit'>Edit</button>
          </form>";

         
         

          ?>





        </div>
        </div>
    </div>




</body>
</html>