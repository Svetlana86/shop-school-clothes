<!--<button class="all" onclick = "getAllUser()">Вывести всех пользователей</button>-->
<br><br>

<!--					
<input type="text" class="lg"> 
<input type="text" class="pd"> 
<button class="add">Добавить</button>                
-->

<form id=addNewUser>
	<input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
	<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
	<input type="text" name="name" class="form-control" id="name" placeholder="Имя"><br>
	<input type="text" name="lastName" class="form-control" id="lastName" placeholder="Фамилия"><br>
	<input type="text" name="fatherName" class="form-control" id="fatherName" placeholder="Отчество"><br>
	<input type="date" name="dataBorn" class="form-control" id="dataBorn" min="1960-01-01" max="2023-12-31"><br>							
	<button class="btn btn-success add-new-user">Добавить</button><br>
</form>
<br>
<table id="table-all-user">
</table>

<script src="script/script.js"></script>
<!--

<script src="script/reg.js"></script>	-->
<!--form id=addNewImage enctype="multipart/form-data">
    <input class="input-images" type="file" name="myimage" multiple>
    <input class="btn btn-success image" type="submit" name="submit_image" value="Добавить">
</form-->

<!--<input id=addNewImage type="file" name="myimage">-->

<!--script src="script/image.js"></script-->
<?php
/*
$getname= $_GET['your_imagename'];

echo "<img src = fetch_image.php?name=".$getname." width=200 height=200 >";*/

?>