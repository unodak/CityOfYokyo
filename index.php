  
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel= "stylesheet" type="text/css" href="stylesheets/style.css">
   
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
                            <li><a href="#contactlink">Contact Us</a></li>
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

            <div class="header" style="background-image: url('images/ball.jpg');  ">
                <div class="banner">
                    <h1>The City of Yokyo presents: FunOlympic Games 2020</h1>
                    <p>Click below to read more about the Fun Olympic Games 2020 <br>
                        being held this summer, <a href = "registrationform.php">SIGN UP</a> for games and take part in the 
                        fun.</p>
                </div> 
            </div>

            <div class="sidebar">
            <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="fixtures.php">Fixtures</a></li>
                    <li><a href="spectators.php">Spectators</a></li>
                    <li><a href="index.php#contactlink">Contact Us</a></li>
                </ul>
            </div>

            <div class="content">
                <h1>Lorem ipsum dolor sit amet</h1>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>    
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>   
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>    
                 
            </div>


            <div class="advert1">
            <section class ="gallery-links">
    <div class="wrapper2">
        <h2 class="ad_h2">Weekly Updates</h2>

        <div class="gallery-container">
            <?php

            include_once 'includes/dbh.inc.php';

            $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Not connected";

            } else {
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class = "picbox">
                    <a href="#">
                <div class= "img_div" style = "background-image: url(images/ads/'.$row["imgFullNameGallery"].');"></div><br>
                <h3 class = "ad_h3">'.$row["titleGallery"].'</h3>
                <p class = "ad_p">'.$row["descGallery"].'</p>
            </a>
            </div>';
 
                }
            }

            
            ?>
            

        
        </div>

        

    </div>

</section>  

            </div>
        </div> 

    </div>
       
        </div>
        
        <!-- CONTACT INFO -->
        <div class="grid">
    
            <div class="contactitle">
            <h2 id="contactlink" class="contactlink"></h2><br>
                <h1>Contact Us</h1>
            </div>

            <div class="contactheader">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,<br> 
                sed diam.</p><br>
            </div>    

            <div class = "contactusform" >  
                <form class"contactform"  action="includes/email.inc.php" method="post">
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="email" placeholder="Email"> <br><br>
                    <textarea name="message" placeholder="Write your message"></textarea> <br>
                    <button type="submitform" name="submitform">Submit</button>
                </form>
            </div>   
            
            <div class = "contactinfo">
                <h1>INFORMATION</h1><br><br>
                &nbsp;<img class = "locationcontact" src="nav/map-marker-alt-solid-b.svg" alt="marker"></img>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit ame <br>
                <img class = "numbercontact" src="nav/phone-solid.svg" alt="phone"></img>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  +267 9876543 / +267 8976543 <br>
                <img class = "faxcontact" src="nav/fax-solid.svg" alt="fax"></img> &nbsp;&nbsp;&nbsp;&nbsp; +267 9876543 <br>
                <img class = "emailcontact" src="nav/envelope-solid.svg" alt="envelope"></img> &nbsp;&nbsp; info@funolympicgames.com <br>

                <img class = "backgroundcontact" src="images/contactpic.png" alt="logo"></img>
            </div>      
        </div>

        <?php
            require "footer.php";

        ?>

    </div>
    
    
</body>
</html>
