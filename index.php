<?php
	if (isset($_COOKIE['user'])) {
		//header("Location: suc.php");
	}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<title>Школьная форма</title>
</head>
<body>
	<header class="p-3 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            ЛОГОТИП
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0" style="margin-right: auto;">
            <li><a href="#" class="nav-link px-2 text-secondary">Главная</a></li>
            <li><a href="#" class="nav-link px-2 text-white">О нас</a></li>
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input
              type="search"
              class="form-control form-control-dark text-white "
              placeholder="Поиск..."
              aria-label="Search"
            />
          </form>

          <div class="text-end">
			<!-- Кнопка-триггер модального окна -->
			<?php if(isset($_COOKIE['user'])){?>
			<form  style="display: inline-block;" action="catalog_product_card.php" method="post">
				<input class="btn btn-outline-light me-2" type="submit" value=<?php echo $_COOKIE['user'];?>>
			</form>	
			<!--<button type="button" class="btn btn-outline-light me-2"><?php /*echo $_COOKIE['user'];*/?></button>-->
			<form  style="display: inline-block;" action="logout.php" method="post">
				<input class="btn btn-warning" type="submit" value="ВЫХОД">
			</form>
			<?php }else{?>
            <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModalReg">
              Регистрация
            </button>
			<button type="button" class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="#exampleModalAuth">Авторизация</button>
			
			<?php }?>
			
			<!-- Модальное окно -->
			<div class="modal fade" id="exampleModalReg" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
						</div>
						<div class="modal-body">

							<form id=regNewUser>
								<p class="block-error dark"></p>
								<input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
								<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
								<input type="text" name="name" class="form-control" id="name" placeholder="Имя"><br>
								<input type="text" name="lastName" class="form-control" id="lastName" placeholder="Фамилия"><br>
								<input type="text" name="fatherName" class="form-control" id="fatherName" placeholder="Отчество"><br>
								<input type="date" name="dataBorn" class="form-control" id="dataBorn" min="1960-01-01" max="2023-12-31"><br>							
								<button class="btn btn-success reg">Зарегистрироваться</button><br>
								
							</form>
							<script src="script/reg.js"></script>

						</div>
					
					</div>
				</div>
			</div>

            <!-- Модальное окно -->
			<div class="modal fade" id="exampleModalAuth" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
					</div>
					<div class="modal-body">

						<form id=authUser>
							<p class="block-error-auth dark"></p>
							<input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
							<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
							<button class="btn btn-success auth">Войти</button><br>
						</form> 
						<script src="script/auth.js"></script>
					</div>
					
					</div>
				</div>
			</div>


          </div>
        </div>
      </div>
    </header>

	

	<main>

      <section class="section-carousel">
        <div class="container">
          <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleDark"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleDark"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
             <!-- <button
                type="button"
                data-bs-target="#carouselExampleDark"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>-->
            </div>

            <div class="carousel-inner">
                <div class="carousel-item">
                    <img
                    src="img/1.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                  
                </div>
                <div class="carousel-item active carousel-item-start">
                    <img
                    src="img/2.jpg"
                    class="d-block w-100"
                    alt="..."
                  />                
                </div>
               <!-- <div class="carousel-item carousel-item-next carousel-item-start">
                    <img
                    src="img/2632515355.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                  <div class="container">
                    <div class="carousel-caption text-end">
                      <h1>One more for good measure.</h1>
                      <p>Some representative placeholder content for the third slide of this carousel.</p>
                      <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                    </div>
                  </div>-->
                </div>
              </div>

           </div>
        </div>
      </section>
	  <section class="section-card">
		<div class="container mt-4">
			<div class="row">			
				<div class="col ">
					<?php if(isset($_COOKIE['user'])) require_once "user_content.php";?>				
				</div>
			</div>
			<div class="row">			
				<div class="col ">	
						<div>
							<h1>Новая школьная коллекция!</h1>
						</div>					

						<div class="o-catalog-page__container catalog__plates page1">
							<div class="catalog-product-card-wrapper">
								
							</div>





						</div>
					<script src="script/product_card.js"> </script>	
				</div>
			</div>

			
		</div>
	  </section>  

    </main>
	<footer class="py-3 my-4 container-fluid bg-light">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">Home</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">Features</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">Pricing</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">FAQs</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">About</a>
        </li>
      </ul>
      <p class="text-center text-muted">© 2022 Company, Inc</p>
    </footer>

</body>
</html>