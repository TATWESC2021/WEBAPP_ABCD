<?php 
  
$alert = '';

session_start();
if(!empty($_SESSION['active']))
{
  header('location: sistema/');
}else{

  if(!empty($_POST))
  {
    if(empty($_POST['usuario']) || empty($_POST['clave']))
    {
      $alert = 'Ingrese su usuario y su calve';
    }else{

      require_once "conexion.php";

      $user = mysqli_real_escape_string($conection,$_POST['usuario']);
      $pass = md5(mysqli_real_escape_string($conection,$_POST['clave']));

      $query = mysqli_query($conection,"SELECT * FROM Usuario WHERE Usuario= '$user' AND contraseña = '$pass'");
      mysqli_close($conection);
      $result = mysqli_num_rows($query);

      if($result > 0)
      {
        $data = mysqli_fetch_array($query);
        $_SESSION['active'] = true;
        $_SESSION['idUser'] = $data['id_usuario'];
        $_SESSION['nombre'] = $data['nombre'];
                                $_SESSION['apellido']  = $data['apellidos'];
                                $_SESSION['email']  = $data['correo'];
                                $_SESSION['rol']    = $data['idrol'];
        $_SESSION['user']   = $data['usuario'];
        

        header('location: sistema/');
      }else{
        $alert = 'El usuario o la clave son incorrectos';
        session_destroy();
      }


    }

  }
}
  require_once "conexion.php";

 
  if(!empty($_POST))
  {
    $alerta='';
    if(empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['contraseña'])||empty($_POST["apellidos"]) 
                    ||empty($_POST['fecha_nac'])||empty($_POST['telefono'])||empty($_POST['direccion']))
    {
      $alerta='<p class="msg_error">Todos los campos son obligatorios.</p>';
    }else{

      $nombre = $_POST['nombre'];
                        $apellidos = $_POST['apellidos'];
      $fecha_nac  = $_POST['fecha_nac'];
                        $telefono = $_POST['telefono'];
      $correo   = $_POST['correo'];
                        $direccion = $_POST['direccion'];
                        $usuario = $_POST['usuario'];
      $contraseña  = md5($_POST['contraseña']);
      $rol    = 2;


      $query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario = '$usuario' OR correo = '$correo' ");
      $result = mysqli_fetch_array($query);

      if($result > 0){
        $alerta='<p class="msg_error">El correo o el usuario ya existe.</p>';
      }else{

        $query_insert = mysqli_query($conection,"INSERT INTO `usuario`(`nombre`, `apellidos`, `Fecha_nac`, `telefono`, `correo`, `direccion`,`idrol`, `Usuario`, `Contraseña`) VALUES"
                                        . " ($nombre, $apellidos,$fecha_nac,$telefono,$correo,$direccion,$rol, $usuario,$contraseña)");
        if($query_insert){
          $alerta='<p class="msg_save">Usuario creado correctamente.</p>';
        }else{
                                $alerta='<p class="msg_error">Error al crear el usuario.</p>';}
                               
        }

      }


    }
 ?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>#Fabrica de Pasteles Paraisso</title>
  <meta name="description" content="Variedad de pasteles y postres para cualquier tipo de evento.
Chocoflan, gelatinas básicas y de diseño, tiramisú, niño envuelto, carlota y mucho más">

  <meta name="theme-color" content="#F0DB4F">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="shortcut icon" type="image/jpeg" href="./img/logo.jpeg">
  <link rel="apple-touch-icon" href="./logo.jpeg">
  <link rel="apple-touch-startup-image" href="./logo.jpeg">
  <link rel="manifest" href="./manifest.json">

 <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
 
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">

   <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
</head>

<body>
   <!-- NAVIGATION -->
   <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F0DB4F">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">¡Ubicanos!</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contactanos</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="nav-link">Iniciar Sesión</a>
      <input class="form-control mr-sm-2" type="search" placeholder="Correo" aria-label="Search">
      <input class="form-control mr-sm-2" type="search" placeholder="Contraseña" aria-label="Search">
      <div class="btn-toolbar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Acceder</button>
      <button id="btn_registrar" class="btn btn-outline-success my-2 my-sm-0" type="submit" href="registrarse.php">Registrarse</button>
      </div>
    </form>
  </div>
   
</nav>
    
     <!-- Modal - personalizado -->

 
  </section>
  
   <div  id="modal_custom" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
        <section id="containerA">
    
    <div class="form_register2">
      
      <hr>
      <div class="alert"><?php echo isset($alerta) ? $alerta : ''; ?></div>

            <form action="" method="post" class="form">
               
               <input type="text" name="nombre" id="nombre" placeholder="Nombre completo">
                                
                <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos">
                
                <input type="text" name="RFC" id="RFC" placeholder="RFC">
                                
                <input type="date" name="fecha_nac" id="fecha_nac" placeholder="Fecha de nacimiento">
                                
                <input type="number" name="telefono" id="telefono" placeholder="Telefono">
        
        <input type="email" name="correo" id="correo" placeholder="Correo electrónico">
                                
                <input type="text" name="direccion" id="direccion" placeholder="direccion">
        
        <input type="text" name="usuario" id="usuario" placeholder="Usuario">
        
        <input type="password" name="contraseña" id="contraseña" placeholder="contraseña">
        
        <input align="middle" type="submit" value="Crear usuario" class="btn_save">
                                 <a class="etiquet" href="index.php" >Iniciar Sesion</a>       
                          
             

      </form>


    </div>


  </section>
      
      
        
        



    
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <!--<button type="button" class="btn btn-primary">Save changes</button>-->
        </div>
    </div>
  </div>
</div>
</div> 
  <header class="Header">
 
    <img src="./img/logo.jpeg" alt="#Rivera Products">
     <h1 class="font-italic p-3">
                ¡Creamos el pastel de tus sueños!
     </h1>
    <p>
      El límite es tu imaginación, en Fabrica Paraisso trabajamos para que tu pastel sea el centro de la fiesta.
    </p>
    <nav>
      <a href="#" target="_blank" title="YouTube">
        <i class="fab fa-youtube"></i>
      </a>
      <a href="https://www.facebook.com/paraissofabrica/" target="_blank" title="Facebook">
        <i class="fab fa-facebook"></i>
      </a>
      <a href="#" target="_blank" title="Instagram">
        <i class="fab fa-instagram"></i>
      </a>
    </nav>
  </header>

<div class="container my-4">

  
  <hr class="mb-5"/>

  <!--Carousel Wrapper-->
  <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

    <!--Controls-->
    <div class="controls-top">
      <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
      <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
    </div>
    <!--/.Controls-->

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example" data-slide-to="1"></li>
      <li data-target="#multi-item-example" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-2">
              <img class="card-img-top" src="https://scontent.fpaz1-1.fna.fbcdn.net/v/t45.5328-4/c19.0.347.347a/21143350_1631489310197458_7225518224744382464_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=c48759&_nc_ohc=FX-BXq_uLl0AX_dRh_K&_nc_ht=scontent.fpaz1-1.fna&tp=29&oh=e9d0b55df5cf3fdc01f5eed72aa8ccd2&oe=60915D92"
                   alt="Card image cap">
              <div class="card-body">
                <h4 class="sabor">Gelatinas</h4>
                <p class="card-text">Las gelatinas que tu evento necesita las encuentras en Paraisso, contamos con un extenso surtido de este delicioso postre. Nuestra estrella, gelatina de mosaico. 
                Pregunta por nuestras demás opciones. </p>
              
              </div>
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block">
            <div class="card mb-2">
              <img class="card-img-top" src="https://scontent.fpaz1-1.fna.fbcdn.net/v/t45.5328-4/c0.0.800.800a/16632567_1339999479428075_2538472095961055232_n.png?_nc_cat=104&ccb=1-3&_nc_sid=c48759&_nc_ohc=yZ0hSP2X4Q8AX90whzb&_nc_ht=scontent.fpaz1-1.fna&_nc_tp=30&oh=baf3a6626ee8cd2c307cfaa1ac35bdcc&oe=60928531"
                   alt="Card image cap">
              <div class="card-body">
                <h4 class="sabor">Cupcakes</h4>
                <p class="card-text">Los quequitos que necesitas para tu evento familiar, social y de negocios, nos encargamos de la elaboración decoración y diseño. </p>
          
              </div>
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block">
            <div class="card mb-2">
              <img class="card-img-top" src="https://scontent.fpaz1-1.fna.fbcdn.net/v/t45.5328-4/c0.0.800.800a/16633054_1214418591987424_8075019956544077824_n.png?_nc_cat=101&ccb=1-3&_nc_sid=c48759&_nc_ohc=a0o6WnmUXwEAX9dhTrf&_nc_ht=scontent.fpaz1-1.fna&_nc_tp=30&oh=afdf5746f3ecb02500b25d1f0abec90d&oe=60911B3F"
                   alt="Card image cap">
              <div class="card-body">
                <h4 class="sabor">Fondant</h4>
                <p class="card-text">Personaliza tus pastel con la profesión, pasatiempo, actividad, deporte. Todo para ese detalle especial. </p>
                
              </div>
            </div>
          </div>
        </div>

      </div>
      <!--/.First slide-->

      <!--Second slide-->
      <div class="carousel-item">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-2">
              <img class="card-img-top" src="https://scontent.fpaz1-1.fna.fbcdn.net/v/t45.5328-4/c0.0.800.800a/16633278_1468931549798024_5735697441034862592_n.png?_nc_cat=111&ccb=1-3&_nc_sid=c48759&_nc_ohc=xTR-nu97WycAX9_5llk&_nc_ht=scontent.fpaz1-1.fna&_nc_tp=30&oh=ef27720f6a4f0e3550c83b94515104ec&oe=6092C5D9"
                   alt="Card image cap">
              <div class="card-body">
                <h4 class="sabor">Bases</h4>
                <p class="card-text">La base perfecta para complementar la decoración de tu pastel. </p>
               
              </div>
            </div>
          </div>


          <div class="col-md-4 clearfix d-none d-md-block">
            <div class="card mb-2">
              <img class="card-img-top" src="https://scontent.fpaz1-1.fna.fbcdn.net/v/t45.5328-4/c0.0.800.800a/16633244_1317776334949792_1455836524267438080_n.png?_nc_cat=103&ccb=1-3&_nc_sid=c48759&_nc_ohc=Agxe0IYeaj4AX_zdC_u&_nc_ht=scontent.fpaz1-1.fna&_nc_tp=30&oh=b5970ee43f1e29fcb4d1a97a4761a10d&oe=60926C61"
                   alt="Card image cap">
              <div class="card-body">
                <h4 class="sabor">Pasteles</h4>
                <p class="card-text">Te acompañamos en tus reuniones familiares y de negocios. 
                  Contamos con alta gama de ingredientes,  trabajamos fondant,  betún,  cupcakes, estilo tradicional, rústicos y las últimas tendencias en pastelería y postres.</p>
               
              </div>
            </div>
          </div>
        </div>

      </div>
      <!--/.Second slide-->

    </div>
    <!--/.Slides-->

  </div>
  <!--/.Carousel Wrapper-->


</div>
    <br>
    <br>
    <h1>¡Ubícanos!</h1>
    <div class="google-maps">
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1RxOEoHir2AcdDAQm09WStyVE6Y6yFInC" width="240" height="180"></iframe>
    </div></div>

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>




  <script src="./script.js"></script>
</body>

</html>
