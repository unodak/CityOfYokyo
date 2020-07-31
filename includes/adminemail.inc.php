<?php

function getEmail($conn){
    $sql = "SELECT * FROM email";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
        echo " <div class = email-box><p><img class = 'user_icon2' src='nav/user.png' alt='logo'></img><p class='name_p'>Name:";  
        echo $row['name']."</p></nl><p class='email_p'>Email:";
        echo $row['email']."</p></nl><p class='message_p'>Message:";
        echo $row['message']."<br>";
        echo "</p> </div><br>";
     }
}

function getComment($conn){
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
        echo "<br><div class = comments-box><p><img class = 'user_icon2' src='nav/user.png' alt='logo'></img><p class='c_name_p'>Name:";  
        echo $row['uid']."</p></nl><p class='commentDate_p'>Date:";
        echo $row['commentDate']."</p></nl><p class='comment_p'>Message:";
        echo $row['message']."<br>";
        echo "</p> </div>";
     }
}