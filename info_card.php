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
        <div class="d-flex flex-wrap align-items-center justify-content-center ">
          <div class="text-end">			
			<a href="/"><button type="button" class="btn btn-outline-light me-2">На главную</button></a>
			<form  style="display: inline-block;" action="logout.php" method="post">
				<input class="btn btn-warning" type="submit" value="ВЫХОД">
			</form>	
          </div>
        </div>
      </div>
    </header>	

	<main>
        <section class="section-card">
            <div class="container mt-4">
                <div class="row">                    
                    <div class="col-7 d-none d-md-block o-product__images-wrapper">
                        <div class="o-product-images__container">
                            <div class="o-product-images__tile">
                                
                            </div>
                        </div>
                    </div> 
                    <div class="col-5 o-product__info-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <div class="o-product-info__wrapper">
                                        <div class="o-primitive-wrapper__container">
                                            <div class="container-fluid o-product-info__scroll-content">
                                                <div class="row">
                                                    <div class="col">
                                                        <h1 class="o-product__title">
                                                            
                                                        </h1> 
                                                    </div>
                                                </div> <!----> <!----> 
                                                <div class="o-product__price row">
                                                    <div class="col">
                                                        <div class="o-product-price__container">
                                                            <div class="o-product-price__price">

                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="row o-product__size-selection size">
                                                    <div class="o-product-size-picker__container col">
                                                        <div class="o-product-size-picker__description">
                                                            <span class="o-product-size-picker__label">Размер:</span>
                                                        </div> 
                                                        <div class="o-product-size-picker__sizes-wrapper"><!----> 
                                                            
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col">
                                    <div class="o-product__description">
                                        <h3>Описание</h3> 

                                    </div> 
                                    <div class="o-product__fabric">
                                        <h4>Состав</h4> 
                                        
                                    </div> 
                                                <!--</div>-->
                                </div> 
                            </div>
                        </div>
                    </div>

                    <script src="script/info_card.js"></script>
                            
                </div>			
            </div>
        </section>
      
    </main>

</body>
</html> 