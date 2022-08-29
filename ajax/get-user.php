<?php

    require_once "../config.php";

    $sql="SELECT * from user";
    $result = $mysqli->query($sql);
    $user = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($user);

    die();

