<?php

function setStaff($conn){
    if (isset($_POST['staffSubmits'])) {
        $fnStaff = $_POST['fnStaff'];
        $lnStaff = $_POST['lnStaff'];
        $emailStaff = $_POST['emailStaff'];
        $locations = $_POST['locations'];    

        $sql = "INSERT INTO staff (fnStaff, lnStaff, emailStaff, locations) VALUES ('$fnStaff', '$lnStaff',$emailStaff, '$locations')";
        $result = $conn->query($sql);
        
    }
}


function getStaff($conn){
    $sql = "SELECT * FROM staff";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
        echo "<div class = staff-box><img class = 'staff_icon' src='nav/user.png' alt='logo'></img><p class='staff_id'>Staff ID:"; 
        echo $row['sId']."</p></nl><p class='fn_staff'>Firstname:";
        echo $row['fnStaff']."</p></nl><p class='ln_staff'>Lastname:";
        echo $row['lnStaff']."</p></nl><p class='email_staff'>Email:";
        echo $row['emailStaff']."</p></nl><p class='location_staff'>Location:";
        echo nl2br($row['locations']);
        echo "</p> </div>";
    }
}

