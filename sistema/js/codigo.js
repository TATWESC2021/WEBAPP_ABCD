     
$(document).ready(function(){     
    $("#btn1").click(function(){
        $('#modal1').modal('show');//básico           
    });
    
    $("#btn2").click(function(){
        $('#modal2').modal('show');
        $('#modal2').draggable({}); //arrastrable        
    });
    
        
     $("#btn3").click(function(){
        $('#modal3').modal('show');	       
    });
    
     $("#btn_hide").click(function(){
        $('#modal_custom').modal('hide');	         
    });
     
    
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var recipient = button.data('whatever') 
      var modal = $(this)
      modal.find('.modal-title').text('New message to ' + recipient)
      modal.find('.modal-body input').val(recipient)
    })
    
    $("#btn_custom").click(function(){
        $("#modal_custom").find(".modal-header").css("background", "linear-gradient(to left, #5B6FBD, #112B94)");
        $("#modal_custom").find(".modal-header").css("color", "white");
        $("#modal_custom").find(".modal-title").text("Ingresa aquí tus datos para crear un usuario");    
        $('#modal_custom').modal('show');
    });

$('.btn_new_cliente').click(function(e){
  e.preventDefault();
  $("#nom_cliente").removeAttr('disabled');
  $("#tel_cliente").removeAttr('disabled');
  $("#dir_cliente").removeAttr('disabled');
  
  $("#div_registro_cliente").slideDown();
});


 //--------------------- SELECCIONAR FOTO PRODUCTO ---------------------
    $("#foto").on("change",function(){
      var uploadFoto = document.getElementById("foto").value;
        var foto       = document.getElementById("foto").files;
        var nav = window.URL || window.webkitURL;
        var contactAlert = document.getElementById('form_alert');
        
            if(uploadFoto !='')
            {
                var objeto_url;
                var type = foto[0].type;
                var name = foto[0].name;
                if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png')
                {
                    contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';                        
                    $("#img").remove();
                    $(".delPhoto").addClass('notBlock');
                    $('#foto').val('');
                    return false;
                }else{  
                        contactAlert.innerHTML='';
                        $("#img").remove();
                        $(".delPhoto").removeClass('notBlock');
                        var objeto_url = nav.createObjectURL(this.files[0]);
                        $(".prevPhoto").append("<img id='img' src="+objeto_url+">");
                        $(".upimg label").remove();
                        
                    }
              }else{
                alert("No selecciono foto");
                $("#img").remove();
              }              
    });

    $('.delPhoto').click(function(){
      $('#foto').val('');
      $(".delPhoto").addClass('notBlock');
      $("#img").remove();

    });




var yourImg = document.getElementById('img');
if(yourImg && yourImg.style) {
    yourImg.style.height = '100px';
    yourImg.style.width = '200px';
}



 //procesar venta
     $('#btn_facturar_ventas').click(function(e){
         e.preventDefault();
             var action = 'procesarVenta';
             var id_cliente = $('#id_cliente').val();
              $.ajax({
            url:'ajax.php',
            type:'POST',
            async: true,
            data: {action:action,id_cliente:id_cliente},

             success: function(response){
             
                //console.log(response);
                if(response !='error'){
                   
                   console.log(response);
                  location.reload();
                }else{
                  console.log('no data');
                }
               
             },
             error:function(error){

             }

          });
         
     });
});   