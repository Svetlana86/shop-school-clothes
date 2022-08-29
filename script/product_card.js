const productCardContainer = document.querySelector('.catalog-product-card-wrapper');
//добавление карточки товара на страницу
function addProductCard(obj){
    let divContainer = document.createElement('div');
            divContainer.classList.add('product-card__container');            
            
                let aCard = document.createElement('a');
                aCard.classList.add('product-card');
                aCard.href = "info_card.php?id="+obj.id;

                    let divImage = document.createElement('div');
                    divImage.classList.add('product-card__image');
                        let divImageContainer = document.createElement('div');
                        divImageContainer.classList.add('product-card__image-container');
                        let arrImg = JSON.parse(obj.id_image);
                        let count = 0;
                        for(let value of arrImg){
                            if(count==2) break;
                            else{
                                let img = document.createElement('img');
                                img.src = 'img/'+value;
                                img.alt = obj.name;
                                divImageContainer.appendChild(img);
                                count++;
                            }
                        }

                        divImage.appendChild(divImageContainer);

                    let divExtra = document.createElement('div');
                    divExtra.classList.add('product-card__extra');

                        let divExtraInner = document.createElement('div');
                        divExtraInner.classList.add('product-card__extra-inner');

                        let divInfo = document.createElement('div');
                        divInfo.classList.add('product-card__info');
                    //info
                        let divInfoSizes = document.createElement('div');
                        divInfoSizes.classList.add('product-card__sizes');
                        let arrSize = JSON.parse(obj.size);
                        for(let value of arrSize){
                            let divInfoSizesSku = document.createElement('div');
                            divInfoSizesSku.classList.add('product-card__sku');
                            let divInfoSizesSkuSize = document.createElement('div');
                            divInfoSizesSkuSize.classList.add('product-card__size', 'product-card__size-ru', 'available');
                            divInfoSizesSkuSize.innerHTML = value;
                            divInfoSizesSku.appendChild(divInfoSizesSkuSize);
                            divInfoSizes.appendChild(divInfoSizesSku);
                        }

                        let divInfoName = document.createElement('div');
                        divInfoName.classList.add('product-card__name');
                        divInfoName.innerHTML = obj.name;//

                        let divInfoPriceInfo = document.createElement('div');
                        divInfoPriceInfo.classList.add('product-card__price-info');
                        let divInfoPrice = document.createElement('div');
                        divInfoPrice.classList.add('product-card__price');
                        divInfoPrice.innerHTML = obj.price;//
                        divInfoPriceInfo.appendChild(divInfoPrice);
                    //end info

                        divInfo.append(divInfoSizes,divInfoName,divInfoPriceInfo);
                        divExtraInner.appendChild(divInfo);
                        divExtra.appendChild(divExtraInner);
                        
                    aCard.append(divImage,divExtra);

                divContainer.appendChild(aCard);

            productCardContainer.append(divContainer);
}

function getAllProduct(){
    fetch('../ajax/get-all-product.php')
    .then((res) => res.json())
    .then((data) => {       
        data.forEach(obj => {
            //добавление карточки товара на страницу
            addProductCard(obj);    
        });        
    })
    .catch((error) => console.log(error));
}
getAllProduct();
addNewItem.onsubmit = async (e) => {
    e.preventDefault();
    

    var form = new FormData(addNewItem);
    //console.log(Array.from(form));
    let arrAll = form.getAll('size');
    let arrToStr = JSON.stringify(arrAll);
    form.delete('size');
    form.append('size',arrToStr);
    //console.log(form.getAll('myimage'));
    let arrImg = [];
    for(let value of form.getAll('id_image')){
        arrImg.push(value.name);
    }
    arrToStr = JSON.stringify(arrImg);
    form.delete('id_image');
    form.append('id_image',arrToStr);
    //console.log(arrToStr);    
    //добавление карточки товара на страницу
    
    /*let divContainer = document.createElement('div');
    divContainer.classList.add('product-card__container');
    
    
        let divCard = document.createElement('div');
        divCard.classList.add('product-card');    

            let divImage = document.createElement('div');
            divImage.classList.add('product-card__image');
                let divImageContainer = document.createElement('div');
                divImageContainer.classList.add('product-card__image-container');

                let count = 0;
                for(let value of arrImg){
                    if(count==2) break;
                    else{
                        let img = document.createElement('img');
                        img.src = 'img/'+value;
                        img.alt = form.get('name');
                        console.log(img);
                        divImageContainer.appendChild(img);
                    }
                }

                divImage.appendChild(divImageContainer);

            let divExtra = document.createElement('div');
            divExtra.classList.add('product-card__extra');

                let divExtraInner = document.createElement('div');
                divExtraInner.classList.add('product-card__extra-inner');

                let divInfo = document.createElement('div');
                divInfo.classList.add('product-card__info');
            //info
                let divInfoSizes = document.createElement('div');
                divInfoSizes.classList.add('product-card__sizes');
                for(let value of arrAll){
                    let divInfoSizesSku = document.createElement('div');
                    divInfoSizesSku.classList.add('product-card__sku');
                    let divInfoSizesSkuSize = document.createElement('div');
                    divInfoSizesSkuSize.classList.add('product-card__size', 'product-card__size-ru', 'available');
                    divInfoSizesSkuSize.innerHTML = value;
                    divInfoSizesSku.appendChild(divInfoSizesSkuSize);
                    divInfoSizes.appendChild(divInfoSizesSku);
                }

                let divInfoName = document.createElement('div');
                divInfoName.classList.add('product-card__name');
                divInfoName.innerHTML = form.get('name');

                let divInfoPriceInfo = document.createElement('div');
                divInfoPriceInfo.classList.add('product-card__price-info');
                let divInfoPrice = document.createElement('div');
                divInfoPrice.classList.add('product-card__price');
                divInfoPrice.innerHTML = form.get('price');
                divInfoPriceInfo.appendChild(divInfoPrice);
            //end info

                divInfo.append(divInfoSizes,divInfoName,divInfoPriceInfo);
                divExtraInner.appendChild(divInfo);
                divExtra.appendChild(divExtraInner);
                console.log(divExtra);
            divCard.append(divImage,divExtra);

        divContainer.appendChild(divCard);

    productCardContainer.append(divContainer);
    console.log(productCardContainer);*/

       
    //конец добавления
    fetch('../ajax/add-product.php', {
        method : 'POST',
        body: form
    })
    .then((res) => res.json())
    .then((data) => data)
    .catch((error) => console.log(error))
    let obj = {};
            for (let entry of form.entries()) {
                obj[entry[0]] = entry[1];
            }
            addProductCard(obj);
}

