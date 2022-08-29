const blockErr = document.querySelector('.block-error.dark');
const btnReg = document.querySelector('.btn.btn-success.reg');


regNewUser.onsubmit = async (e) => {
    e.preventDefault();

    let form = new FormData(regNewUser);
    //form.append('message','');
    let login = form.get('login');
    let response = await fetch('../ajax/reg-user.php', {
      method: 'POST',
      body: form
    });
    if(response.ok){
        let result = await response.json();
        if(result){
            blockErr.innerHTML = result;
        }else{
            blockErr.innerHTML = "Вы успешно зарегистрированы, "+login+"! "+'Сейчас вы будете переадресованы на главную страницу сайта. Если это не произошло, перейдите на неё по <a href="/index.php">прямой&nbsp;ссылке</a>.</p>';
            document.cookie = "user="+login;
            setTimeout(() => { // прячем через 5 секунд
                document.location = '/index.php';
            }, 5000);
        }        
        
    } else {
        console.log(response.status);
    }
    
    //blockErr.textContent = "result.message";
    //console.log(`tyt->${result.message}`);
  };