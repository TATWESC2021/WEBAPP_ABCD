if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('./sw.js')
    .then(reg => console.log('Registro de SW exitoso', reg))
    .catch(err => console.warn('Error al tratar de registrar el sw', err))
}
  $("#btn_registrar").click(function(){
        $("#modal_custom").find(".modal-header").css("background", "linear-gradient(to left, #5B6FBD, #112B94)");
        $("#modal_custom").find(".modal-header").css("color", "white");
        $("#modal_custom").find(".modal-title").text("Ingresa aquí tus datos para crear un usuario");    
        $('#modal_custom').modal('show');
    });