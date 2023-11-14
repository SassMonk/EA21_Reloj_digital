function actualizarReloj() {
    const ahora = new Date();
    const horas = ahora.getHours();
    const minutos = ahora.getMinutes().toString().padStart(2, '0');
    const segundos = ahora.getSeconds().toString().padStart(2, '0');
    const tiempo = `${horas.toString().padStart(2, '0')}:${minutos}:${segundos}`;
    
    let mensaje = '';
    let mensajeClase = '';

    if ((horas >= 5 && horas < 12) || (horas === 12 && minutos === '00')) {
        mensaje = 'BUENOS DÍAS';
        mensajeClase = 'mensaje-dia';
    } else if (horas >= 12 && horas < 19) {
        mensaje = 'BUENAS TARDES';
        mensajeClase = 'mensaje-tarde';
    } else {
        mensaje = 'BUENAS NOCHES';
        mensajeClase = 'mensaje-noche';
    }

    const relojElemento = document.getElementById('reloj');
    relojElemento.textContent = `${tiempo} - `;
    
    const mensajeElemento = document.createElement('div');
    mensajeElemento.classList.add('mensaje', mensajeClase);
    mensajeElemento.textContent = mensaje;

    relojElemento.appendChild(mensajeElemento);
}

setInterval(actualizarReloj, 1000);
