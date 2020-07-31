<?php


function setGames($conn){
    if (isset($_POST['gameSubmit'])) {
        $sport = $_POST['sport'];
        $gameday = $_POST['gameday'];
        $location = $_POST['location'];    

        $sql = "INSERT INTO gameschedule (sport, gameday, location) VALUES ('$sport', '$gameday', '$location')";
        $result = $conn->query($sql);
        
    }
}

function getGames($conn){
    $sql = "SELECT * FROM gameschedule";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
        echo "<div class = game-box><p class='staff_id'>Game ID:";  
        echo $row['sportId']."</p></nl><p class='sport_name'>Sport:";
        echo $row['sport']."</p></nl><p class='sport_gameday'>Lastname:";
        echo $row['gameday']."</p></nl><p class='location_staff'>Location:";
        echo nl2br($row['location']);
        echo "</p>

        </div>";
    }
}
