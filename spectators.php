<?php
    date_default_timezone_set('Africa/Gaborone');
    include 'includes/dbh.inc.php';
    include 'includes/comment.inc.php';


?>

<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>Spectators</title>
<link rel= "stylesheet" type="text/css" href="stylesheets/style.css">
<link rel= "stylesheet" type="text/css" href="stylesheets/spectatorstyle.css">
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
        <div class = "grid">

        <div class = "ticketsignup">
            <form class="ticket-btn-form" action="ticketconfirmation.php">
                <button class="ticket-btn">Buy ticket</button>
            </form>    


        </div>

        <div class="commentSection">

        <h1 class="sp_h1">Lorem ipsum dolor sit amet</h1>
               
                <p class="sp_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>Duis aute irure 
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>Excepteur sint occaecat cupidatat non 
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>  

                <p class="sp_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>Duis aute irure 
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                </p> <br><br><br>

                <h2 class="sp_h2">Leave a comment</h2>
<?php
echo "<form class = 'comments' method='post' action = '".setComments($conn)."'>
    <input type='text' name='uid' placeholder='Name'><br>
    <input type='hidden' name='commentDate' value='".date('Y-m-d H:i:s')."'>
    <textarea name = 'message'></textarea><br>
    <button class='commentSubmit' name = 'commentSubmit' type= 'submit'>Comment</button>
    </form><br>"; 

     getComments($conn);
?>

        </div>

        </div>

</div>

</body>
</html>