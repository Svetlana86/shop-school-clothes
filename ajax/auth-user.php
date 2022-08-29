<?php
require_once "../config.php";
$error='';
if (!empty($_POST['login']) && !empty($_POST['pass'])) 
{
    $sql = "SELECT * FROM user WHERE login= ?  LIMIT 1";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s',  $_POST['login']);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    if($user!=null) {        
        if (password_verify($_POST['pass'], $user['password']))
        {
          /*setcookie("user",  $user['login'], time()+3600);
          header("Location: suc.php");
          die();*/
          $error='';
        }
        else  {
          $error = 'Неверный пароль';
        }
    }
    else  {  
      $error = 'Пользователь с таким именем не существует';
    }
}else{ 
    $error='Вы не ввели логин или пароль';
}
//echo $error;
echo json_encode($error);
die(); 
?>
