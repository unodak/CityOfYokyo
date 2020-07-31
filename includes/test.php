<?php 

require 'dbh.inc.php';

if (isset($_POST['gameDelete'])) {
        $sportId = $_POST['sportId'];

        if (!empty($sportId)) {

           
        $sql = ' DELETE FROM gameschedule WHERE sportId= "$sportId" ';
        $result = $conn->query($sql);
        header("Location: ../admin-games.php");
        }

        else {
            
            echo "its empty";

        }
    }