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
                <div class="col-4 ">
                    <form id=addNewItem style="display:grid;">
                        <select name="gender" id="gender" class="form-control">
                            <option value="Для мальчиков" selected>Для мальчиков</option>
                            <option value="Для девочек" >Для девочек</option>
                        </select><br>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Наименование"><br>
                        <select type="text" name="size" id="size" class="form-control" multiple>
                            <option value="122" selected>122</option>
                            <option value="128" >128</option>
                            <option value="134" >134</option>
                            <option value="140" >140</option>
                            <option value="146" >146</option>
                            <option value="152" >152</option>
                            <option value="164" >164</option>
                            <option value="170" >170</option>
                        </select><br>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Цена"><br>
                        <input type="text" name="structure" class="form-control" id="structure" placeholder="Состав"><br>
                        <select name="country" id="country" class="form-control">
                            <option value="Китай" selected>Китай</option>
                            <option value="Бангладеш" >Бангладеш</option>

                        </select><br>
                        <textarea id="description" name="description" rows="5" cols="33" wrap="hard" placeholder="Описание"></textarea><br>
                        <input class="form-control" type="file" name="id_image" multiple accept="image/png, image/jpeg"><br>
                        <button class="btn btn-success product-new" >Добавить</button><br>
                                                
                    </form>                
                </div>			
                	
				<div class="col-8 ">
					<div class="o-catalog-page__container catalog__plates">
						<div class="catalog-product-card-wrapper">
						</div>
					</div>		
				</div>
        		<script src="script/product_card.js"></script>
			</div>			
		</div>
	  </section>
      
    </main>

</body>
</html>