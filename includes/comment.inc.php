<?php

function setComments($conn) {
    if (isset($_POST['commentSubmit'])){
        $uid = $_POST['uid'];
        $commentDate= $_POST['commentDate'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (uid, commentDate, message) VALUES ('$uid','$commentDate','$message')";
        $result = $conn->query($sql);
    }

}

function getComments($conn) {
    $sql= "SELECT* from comments";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
        echo "<div class = comment-box><h1 class='comment_name'>";
        echo $row['uid']."</h1></nl><p class='comment_date'>";
        echo $row['commentDate']."</p></nl><p class='comment_message'>";
        echo nl2br($row['message']);
        echo "</p>
            
        
        
        </div>";
    }
    
}


