const productImages = document.querySelector('.o-product-images__tile');
const productTitle = document.querySelector('.o-product__title');
const productPrice = document.querySelector('.o-product-price__price');
const productSizeWrapper = document.querySelector('.o-product-size-picker__sizes-wrapper');
const productDescription = document.querySelector('.o-product__description');
const productFabric = document.querySelector('.o-product__fabric');
//добавление карточки товара на страницу
function addProductCard(obj){
    let arrImg = JSON.parse(obj.id_image);
    let flag = true;
    for(let value of arrImg){
        let divImg = document.createElement('div');
        if(flag){
            divImg.classList.add('o-product-images__image','main');
            flag = false;
        } 
        else divImg.classList.add('o-product-images__image');
        let img = document.createElement('img');
        img.src = 'img/'+value;
        img.alt = obj.name;
        divImg.appendChild(img);
        productImages.append(divImg);
    }
    
    productTitle.innerHTML = obj.name;
    productPrice.innerHTML = obj.price;

    let arrSize = JSON.parse(obj.size);
    for(let value of arrSize){
        let divSize = document.createElement('div');
        divSize.classList.add('o-product-size-picker__size-item');
        divSize.innerHTML = value;
        productSizeWrapper.appendChild(divSize);
    }
    let divDescription = document.createElement('div');
    divDescription.innerHTML = obj.description;
    productDescription.appendChild(divDescription);

    let divFabric = document.createElement('div');
    divFabric.innerHTML = obj.structure;
    productFabric.appendChild(divFabric);
   
}

function getInfoProductCard(){
    let params = (new URL(document.location)).searchParams; 
    fetch('../ajax/get-info-card.php?id='+params.get('id'))
    .then((res) => res.json())
    .then((data) => {       
        //добавление карточки товара на страницу
        addProductCard(data);           
    })
    .catch((error) => console.log(error));
}
getInfoProductCard();



