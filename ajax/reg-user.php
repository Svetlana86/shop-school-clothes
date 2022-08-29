
<?php
require_once "../config.php";

// Проверка имени пользователя
function checkLogin($str) {

    // Инициализируем переменную с возможным сообщением об ошибке
    $error = '';
    
    // Если отсутствует строка с логином, возвращаем сообщение об ошибке
    if(!$str) {
        return $error = 'Вы не ввели логин';
    }
    
    /**
      * Проверяем имя пользователя с помощью регулярных выражений
      * Логин должен быть не короче 4, не длиннее 16 символов
      * В нем должны быть символы латинского алфавита, цифры, 
      * в нем могут быть символы '_', '-', '.'
      */
    $pattern = '/^[-_.a-z\d]{4,16}$/i'; 
    $result = preg_match($pattern, $str);
    
    // Если проверка не прошла, возвращаем сообщение об ошибке
    if(!$result) {
        return $error = 'Логин должен быть не короче 4, не длиннее 16 символов. В нем должны быть символы латинского алфавита, цифры и символы _, -, .';
    }
    return $error;

    // Если же всё нормально, вернем значение true
    
}
 
// Проверка пароля пользователя
function checkPassword($str) {
    // Инициализируем переменную с возможным сообщением об ошибке
    $error = '';
    
    // Если отсутствует строка с логином, возвращаем сообщение об ошибке
    if(!$str) {
        return $error = 'Вы не ввели пароль';
    }
    
    /**
      * Проверяем пароль пользователя с помощью регулярных выражений
      * Пароль должен быть не короче 6, не длиннее 16 символов
      * В нем должны быть символы латинского алфавита, цифры, 
      * в нем могут быть символы '_', '!', '(', ')'
      */
    $pattern = '/^[_!)(.a-z\d]{6,16}$/i';   
    $result = preg_match($pattern, $str);
    
    // Если проверка не прошла, возвращаем сообщение об ошибке
    if(!$result) {
        return $error = 'Пароль должен быть не короче 6, не длиннее 16 символов. В нем должны быть символы латинского алфавита, цифры и символы _, !, (, )';
    }
    return $error;
}
 
 

$error=checkLogin($_POST['login']);
if(!$error){
    $error=checkPassword($_POST['pass']);
    if(!$error){
        $sql = "SELECT * FROM user WHERE login= ?  LIMIT 1";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('s',  $_POST['login']);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        if($user!=null) {  
            $error='Пользователь с таким именем уже существует!';     
        }
        else { 
            $password = $_POST['pass'];
            $hash = password_hash($password, PASSWORD_DEFAULT); 
            $sql = "INSERT INTO user (id, name, lastName, fatherName, dataBorn, login, password) VALUES (NULL, ?, ?, ?, ?, ?, ?)";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param('ssssss',  $_POST['name'], $_POST['lastName'], $_POST['fatherName'], $_POST['dataBorn'], $_POST['login'], $hash);
            $stmt->execute();  
            $error='';
            //setcookie("user",  $_POST['login'], time()+3600);   
               
        }
    }
}
echo json_encode($error);
die();   

?>
