<?php 

	if(empty($_SESSION['active']))
	{
		header('location: ../');
	}
 ?>
	<header>
		<div class="header">
                    <a href="#" class="btnMenu"><i class="fas fa-bars"></i></a>
			<h1>Bienvenido a Tariweb </h1>  
			<div class="optionsBar">
				<p>Martínez de la torre,Ver., <?php echo fechaC(); ?></p>
				<span>|</span>
				<span class="user"><?php echo $_SESSION['user'].' -'.$_SESSION['rol']; ?></span>
				<img class="photouser" src="img/man.png" alt="Usuario">
                                
                                <a href="salir.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
                              
			</div>
		</div>
		<?php include "nav.php"; ?>
		<?php include "includes/footer.php"; ?>
	<script src="js/jquery-3.4.1.js"></script>
	 <script src="js/jquery-3.4.1.slim.min.js"></script>
 	 <script src="js/popper.min.js"></script>
	 <script src="js/codigo.js"></script>
	 <script src="js/bootstrap.min.js"></script>
	</header>