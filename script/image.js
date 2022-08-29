
const photos = document.querySelector('.input-images');
const form = document.querySelector('.btn.btn-success.image');
console.log('I tyt');
function handleSubmit(event) {
    console.log('ghkjhklgfh');
    event.preventDefault();

    const formData = new FormData();
    for (let i = 0; i < photos.files.length; i++) {
        formData.append('photos', photos.files[i], photos.files[i].name);    
    }

    try{
        const response = await fetch('../getdata.php',
        {
            method: 'POST',
            body: formData
        });
        const result = await response.json();
        console.log('Успех', JSON.stringify(result));
    } catch (error) {
        console.error('Ошибка: ', error);
    }
}

form.addEventListener('click', function() {
    handleSubmit();
});
