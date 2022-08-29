<?php
require_once "../config.php";
$error='';
echo $_POST['size'];
if (!empty($_POST['gender']) && !empty($_POST['name']) && !empty($_POST['size']) && !empty($_POST['price']) && !empty($_POST['country']) && !empty($_POST['structure']) && !empty($_POST['description'])) 
{
    $sql = "INSERT INTO school_clothes (id, gender, name, size, price, structure, country, description, id_image) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ssssssss',  $_POST['gender'], $_POST['name'], $_POST['size'], $_POST['price'], $_POST['structure'], $_POST['country'], $_POST['description'],$_POST['id_image']);
    $stmt->execute();  
    $error='';
    
}else{ 
    $error='Заполните все поля';
}
//echo $error;
echo json_encode($error);
die(); 
?>
