<?php


function setUser($conn){
    if (isset($_POST['userSubmit'])) {
        $emailUsers = $_POST['emailUsers'];
        $fnUsers = $_POST['fnUsers'];
        $lnUsers = $_POST['lnUsers'];  


        $sql = "INSERT INTO users (emailUsers, fnUsers, lnUsers) VALUES ('$emailUsers', '$fnUsers', '$lnUsers')";
        $result = $conn->query($sql);
        
    }
}

function getUser($conn){
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
        echo "<div class = user-box><p><img class = 'user_icon2' src='nav/user.png' alt='logo'></img><p class='user_email'>Email:";  
        echo $row['emailUsers']."</p></nl><p class='fn_user'>Firstname:";
        echo $row['fnUsers']."</p></nl><p class='ln_user'>Lastname:";
        echo $row['lnUsers']."<br>";
        echo "</p> </div>";
     }
}
