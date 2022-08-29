const blockErr2 = document.querySelector('.block-error-auth.dark');

authUser.onsubmit = async (e) => {
    e.preventDefault();

    let form = new FormData(authUser);
    let login = form.get('login');
    let response = await fetch('../ajax/auth-user.php', {
      method: 'POST',
      body: form
    });
    if(response.ok){
        let result = await response.json();
        console.log(result);
        if(result){
            blockErr2.innerHTML = result;
        }else{
            blockErr2.innerHTML = "Вы успешно авторизованы, "+login+"! "+
            'Сейчас вы будете переадресованы на главную страницу сайта. Если это не произошло,'+ 
            'перейдите на неё по <a href="/index.php">прямой&nbsp;ссылке</a>.</p>';
            document.cookie = "user="+login;
            setTimeout(() => { // прячем через 5 секунд
                document.location = '/index.php';
            }, 5000);
        }        
        
    } else {
        console.log(response.status);
    }
  };