<?php
require_once "../config.php";
$sql = "SELECT * FROM school_clothes WHERE id= ?  LIMIT 1";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('s',  $_GET['id']);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
echo json_encode($user);
die(); 
?>
