//Modal->
document.querySelector('.login-button').addEventListener('click', function() {
    // Mostrar el modal
    document.getElementById('modalSignin').style.display = 'block';
});

// Opcional: Cerrar el modal al hacer clic en el botón de cierre
document.querySelector('.modal .btn-close').addEventListener('click', function() {
    // Ocultar el modal
    document.getElementById('modalSignin').style.display = 'none';
});
//modal carrito
