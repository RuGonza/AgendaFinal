let pathme = window.location.pathname;
if(pathme === '/Ajustes') {
    let setings = document.querySelector('form#setings');
    setings.addEventListener('submit', function(e) {
            e.preventDefault();
            let logotipo = document.getElementById('logotipo');
            let icon = document.getElementById('icon');
            let icon_extencion = ['icon'];
            let logotipo_extencion = ['png','jpeg'];
            console.log(logotipo);

    });
}