const btnAdd = document.querySelector(".add");
//const btnAddImage = document.querySelector(".btn.btn-success.image");
const divCol = document.querySelector('.col'); 

const photos = document.querySelector('.input-images');
const btnAddImage = document.querySelector('.btn.btn-success.image');

const tableRef = document.getElementById('table-all-user');
const btnAddUser = document.querySelector('.btn.btn-success.add-new-user');

function addRow(tableID) {
    // Get a reference to the table
    var tableRef = document.getElementById(tableID);
  
    // Insert a row in the table at row index 0
    var newRow = tableRef.insertRow(0);
  
    // Insert a cell in the row at index 0
    var newCell = newRow.insertCell(0);
  
    // Append a text node to the cell
    var newText = document.createTextNode('New top row');
    newCell.appendChild(newText);
}
function addTableUsers(obj){
    newRow = tableRef.insertRow(-1);
            //indexRow++;
    let indexCol = 0;
    let count = Object.keys(obj).length-1;
    console.log(count);
    for (let property in obj) {
        let newCell = newRow.insertCell(indexCol);
        var newText = document.createTextNode(obj[property]);
        newCell.appendChild(newText);
        indexCol++;
        if(count==indexCol) break;        
    }
}
function getAllUser(){
    
    fetch('../ajax/get-user.php')
    .then((res) => res.json())
    .then((data) => {
        
        let theadTable = ['ID', 'Имя', 'Фамилия', 'Отчество', 'Дата рождения', 'Логин'];
        let newRow = tableRef.insertRow(0);
        let indexCol = 0;
        for (let element of theadTable) {
            let newCell = newRow.insertCell(indexCol);
            var newText = document.createTextNode(element);
            newCell.appendChild(newText);
            indexCol++;
        }
        //let indexRow = 1;       
        
        data.forEach(obj => {
            addTableUsers(obj)                    
        });        
    })
    .catch((error) => console.log(error));
}

getAllUser();

function addUser(){

    //let loginData = document.querySelector('.lg').value;
    //let passData = document.querySelector('.pd').value;
    /*let form = document.querySelector('.form-add-user');*/
    var form = new FormData(addNewUser);
    //form.append('login', loginData);
    //form.append('password', passData);
    fetch('../ajax/add-user.php', {
        method : 'POST',
        body: form
    })
    .then((res) => res.json())
    .then((data) => {
        /*let div = document.createElement('div');
        div.innerHTML = data.id + " - " + data.login + "<br>";
        divCol.append(div);    */
        addTableUsers(data);
    })
    .catch((error) => console.log(error))
}

function handleSubmit() {

    const formData = new FormData();
    
    for (let i = 0; i < photos.files.length; i++) {
        formData.append('myimage', photos.files[i], photos.files[i].name);
    }
    fetch('../getdata.php', {
        method: 'POST',        
        body: formData
    })
    .then((res) => {
        res.json();
    })
    .then((data) => {
        console.log(data);   
    })
    .catch((error) => console.log(error))
}


btnAddUser.addEventListener('click', function() {
    addUser();
});
/*
btnAddImage.addEventListener('click', function() {    
    handleSubmit();
});*/







/*regNewImage.onsubmit = async (e) => {
    e.preventDefault();

    let blob = await new Promise(resolve => regNewImage.toBlob(resolve, 'image/jpeg'));
    let response = await fetch('../getdata.php', {
        method: 'POST',
        body: blob
    });
    if(response.ok){
        // сервер ответит подтверждением и размером изображения
        //------------------------
        let blob = await response.blob(); // скачиваем как Blob-объект

        // создаём <img>
        let img = document.createElement('img');
        img.style = 'position:fixed;top:10px;left:10px;width:100px';
        document.body.append(img);

        // выводим на экран
        img.src = URL.createObjectURL(blob);
        //-------------------------
        
    }else {
        console.log(response.status);
    }

    
        if(result){
            blockError.innerHTML = 'Пользователь с таким именем уже существует!';
        }else{
            blockError.innerHTML = "Вы успешно зарегистрированы, "+login+"! "+'Сейчас вы будете переадресованы на главную страницу сайта. Если это не произошло, перейдите на неё по <a href="/index.php">прямой&nbsp;ссылке</a>.</p>';
            document.cookie = "user="+login;
            setTimeout(() => { // прячем через 5 секунд
                document.location = '/index.php';
            }, 5000);
        }        
        
    } 
 };*/
    
    
 

