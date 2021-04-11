<?php 
	
	
	
	require_once "conexion.php";

 
	if(!empty($_POST))
	{
		$alert='';
		if(empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['contraseña'])||empty($_POST["apellidos"]) 
                    ||empty($_POST['fecha_nac'])||empty($_POST['telefono'])||empty($_POST['direccion']))
		{
			$alert='<p class="msg_error">Todos los campos son obligatorios.</p>';
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
				$alert='<p class="msg_error">El correo o el usuario ya existe.</p>';
			}else{

				$query_insert = mysqli_query($conection,"INSERT INTO `usuario`(`nombre`, `apellidos`, `Fecha_nac`, `telefono`, `correo`, `direccion`,`idrol`, `Usuario`, `Contraseña`) VALUES"
                                        . " ($nombre, $apellidos,$fecha_nac,$telefono,$correo,$direccion,$rol, $usuario,$contraseña)");
				if($query_insert){
					$alert='<p class="msg_save">Usuario creado correctamente.</p>';
				}else{
                                $alert='<p class="msg_error">Error al crear el usuario.</p>';}
                               
				}

			}


		}

	



 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<?php include "./sistema/includes/scripts.php"; ?>
	<title>Registro Usuario</title>
</head>
<body background=#FFFFFF>
	
	<section id="container">
		
		<div class="form_register2">
			
			<hr>
			<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>

                        <form action="" method="post" class="form2">
                            
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<?php include "./sistema/includes/footer.php"; ?>
</body>
</html>