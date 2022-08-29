<?php

require_once "../config.php";

$password = $_POST['pass'];
$hash = password_hash($password, PASSWORD_DEFAULT); 
$sql = "INSERT INTO user (id, name, lastName, fatherName, dataBorn, login, password) VALUES (NULL, ?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('ssssss',  $_POST['name'], $_POST['lastName'], $_POST['fatherName'], $_POST['dataBorn'], $_POST['login'], $hash);
$stmt->execute();  
$error='';  

$sql="SELECT * FROM user WHERE login= ?  LIMIT 1";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('s',  $_POST['login']);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
echo json_encode($user);

die();

