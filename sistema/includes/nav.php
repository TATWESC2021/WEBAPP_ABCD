<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">	
<nav>
	<div class="col-12  justify-content-center" >
		<ul class="justify-content-center">
				<li><a href="index.php"><i class="fas fa-home"></i> Inicio</a></li>
			<?php 
				if($_SESSION['rol'] == 1){
			 ?>
				<li class="principal">

                                    <a href="#"><i class="fas fa-user-tie"></i> Usuarios <i class="fas fa-angle-down"></i> </a>
                                      
					<ul>
						<li><a href="registro_usuario.php"><i class="fas fa-user-plus"></i> Nuevo Usuario</a></li>
						<li><a href="lista_usuarios.php"><i class="fas fa-users"></i> Lista de Usuarios</a></li>
					</ul>
				</li>
			<?php } ?>
                                
                                 <?php 
				if($_SESSION['rol'] == 7){
			 ?>
				<li class="principal">
                                    <a href="#"><i class="fas fa-user"></i> Clientes <i class="fas fa-angle-down"> </i></a>
					<ul>
						<li><a href="registro_cliente.php"><i class="fas fa-user-plus"></i> Nuevo Cliente</a></li>
						<li><a href="lista_clientes.php"><i class="far fa-address-book"></i> Lista de Clientes</a></li>
					</ul>
				</li>
                                <?php } ?>
                                <?php 
				if($_SESSION['rol'] == 1){
			 ?>
				<li class="principal">
                                    <a href="#"><i class="fas fa-truck"></i> Materiales <i class="fas fa-angle-down"> </i></a>
					<ul>
						<li><a href="registro_material.php"><i class="fas fa-truck-moving"></i> Nuevo material</a></li>
						<li><a href="lista_material.php"><i class="far fa-address-book"></i> Lista de materiales</a></li>
					</ul>
				</li>
                                <?php
                                }?>
				<li class="principal">
                                    <a href="#"><i class="fas fa-pallet"></i>Tarimas <i class="fas fa-angle-down"> </i></a>
					<ul>
                                              <?php 
				if($_SESSION['rol'] == 1){
			 ?>
						<li><a href="registrar_tarima.php"><i class="fas fa-plus-circle"></i> Nueva Tarima</a></li> <?php
                                }?>
						<li><a href="lista_tarimas.php"><i class="fas fa-clipboard-list"></i> Lista de Tarimas</a></li>
					</ul>
				</li>
				<li class="principal">
                                <a href="#"><i class="fas fa-store"></i> Ventas <i class="fas fa-angle-down"> </i></a>
					<ul>
						<li><a href="nueva_factura.php"><i class="fas fa-plus-circle"></i> Nuevo Venta</a></li>
						<li><a href="lista_venta.php"><i class="fas fa-clipboard-list"></i>Venta</a></li>
					</ul>
				</li>
				
<?php 
				if($_SESSION['rol'] == 2){
			 ?>
				<li class="principal">
                                <a href="quienes_somos.php"><i class="far fa-address-card"></i> ¿Quienes somos? <i class="fas fa-angle-down"> </i></a>
					<ul>
						
					</ul>
				</li>

				<?php
                                }?>
                                  <?php 
				if($_SESSION['rol'] == 1){
			 ?>
                                <li class="principal">
                                    <a href="#"><i class="fas fa-cash-register"></i> Compras <i class="fas fa-angle-down"> </i></a>
					<ul>
						<li><a href="registro_compra.php"><i class="fas fa-plus-circle"></i> Nueva compra</a></li>
						<li><a href="lista_compra.php"><i class="fas fa-clipboard-list"></i> Compras</a></li>
					</ul>
				</li><?php
                                }?>

 <?php 
                	if($_SESSION['rol'] == 1){
			 ?>
                                <li class="principal">
                                    <a href="Backup.php"><i  class="fas fa-database"></i> Backup </a>
					
				</li><?php
                                }?>
			</ul>
	</div>
			
		</nav>