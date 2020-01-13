const grid = new Muuri('.grid', {
    layout: {
        rounding: false
    }
});


window.addEventListener('load', () => {
    /* Codigo para que las imagenes sean responsivas*/
    grid.refreshItems().layout();
    /* Se esta obteniendo el grid desde html, para despues, cuando el evento
    se complete, llame a la clase "imagenes-cargadas"*/
    document.getElementById('grid').classList.add('imagenes-cargadas');

    /* Aqui le estamos diciendo que accedas al id categorias y me traigas todos los enlaces*/
    const enlaces = document.querySelectorAll('#categorias a');
    /* Iterar enlaces*/
    enlaces.forEach((elemento) => {
       elemento.addEventListener('click', (evento) => {
            evento.preventDefault();
            enlaces.forEach((enlace) => enlace.classList.remove('activo'));
            evento.target.classList.add('activo');
           
            const categori = evento.target.innerHTML.toLowerCase();
            grid.filter('[data-categoria="diseño"]');
       });
    });
});
