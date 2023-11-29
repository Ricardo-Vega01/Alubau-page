<?php
	include_once '../templates/enlace.php';

	$description = ["Se produce mediante un sistema horizontal, lo permite efectuarlo en espesores desde 6 a 19mm.",
	"Son paneles compuestos por al menos dos vidrios sellados hermeticamente mediante una cinta termoplastica.",
	"Se produce mediante un sistema horizontal, lo cual permite encapsular vidrios de hasta 60mm."
	];
	$titleCard = ["Vidios Templados","Duo-Vent","Laminado"]; 
	$rutaImagen = ["../resources/Productos/templado.jpg","../resources/Productos/insulado.jpg","../resources/Productos/laminado.jpg"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="description" content="Productos y procesos realizados en alubau, implementación de soluciones arquitectonicas con diferentes tipos de aluminio y vidrio.">
	<meta name="keywords" content="vidrio, vidrio de seguridad, tipos de vidrio, aluminio, canceleria, puertas y ventanas de vidrio">
	<link rel="shortcut icon" href="../resources/favicon/favicon.ico" type="image/x-icon">
	<title>Productos Alubau</title>
	<?php 
		$indiceStyle = 0;
		while($indiceStyle < count($estilos)){
			echo "<link rel='preload' href='$estilos[$indiceStyle]'>";
	?>
	<link rel="stylesheet" href="<?php echo $estilos[$indiceStyle];?>">
	<?php 
			$indiceStyle ++;
		} 
	?>
	<link rel="stylesheet" href="../css/general.css">
</head>
<body>

	<?php include_once '../templates/menu.php'; ?>
	
	<main>
		<div class="container bg-dark bg-gradient bg-opacity-25 mt-5 pt-4 rounded-3 shadow">
			<div class="p-3 mt-3"><h2 class="text-danger">Nuestros Procesos</h2></div>
			
			<div class="d-flex flex-column flex-sm-row justify-content-center pt-3">
				<?php
					$rutasCard = ["alutemp.php","alutherm.php","alulam.php"];
					for ($indiceCard=0; $indiceCard < count($rutaImagen) && $indiceCard<count($titleCard) && $indiceCard<count($description) && $indiceCard < count($rutasCard); $indiceCard++) { 
					
				?>
				<div class="p-3 align-content-center">
				
					<div class="card shadow" style="width: 22rem;">
						<img src="<?php echo $rutaImagen[$indiceCard]; ?>" class="card-img-top" alt="<?php echo $titleCard[$indiceCard]; ?>">
					  	<div class="card-body">
					  		<h5 class="card-title"><?php echo $titleCard[$indiceCard]; ?></h5>
					    	<p class="card-text text-truncate"><?php echo $description[$indiceCard]; ?></p>
					    	<a href="<?php echo $rutasCard[$indiceCard] ?>">Ver mas</a>
					  </div>
				</div>

				</div>
				<?php } ?>
			</div>
		</div>

		<section class="container my-3">
			<div class="card mb-3">
			 	<div class="row g-0">
			    	<div class="col-md-4">
			      		<img src="../resources/Productos/riel-serie-32.jpg" class="img-fluid rounded-start" alt="...">
			    	</div>
			    	<div class="col-md-8 align-self-center">
			      		<div class="card-body">
			        		<h5 class="card-title">Canceleria de Aluminio</h5><hr>
			        		<p class="card-text">
			        			Encuentra la mejor opción en cuanto a diseño y calidad; conoce nuestras series de aluminio, concreta tu proyecto y cumple tu objetivo.
			        		</p>
			        		<a href="mailto:ventas@alubauglass.com" target="_blank" type="button" class="btn btn-outline-primary">Cotizar</a>
			        		<p class="card-text my-3"><small class="text-body-secondary">
								No se hay venta por perfil, solo canceleria ensamblada.
							</small></p>

			      		</div>
			    	</div>
			  	</div>
			</div>
		</section>

		<section class="container my-4 bg-info glass">
			<div style="border: none;" class="card mb-3 bg-info text-danger p-3">
				<div class="d-flex flex-column flex-sm-row justify-content-center">
					<div class="mb-3 p-2">
						<img src="../resources/vidrios/klare.jpg" class="object-fit-fill  rounded w-100" alt="vidrio-extraclaro">
					</div>
					<div class="mb-3 p-2 d-none d-md-block">
						<img src="../resources/vidrios/pyrosol-6.jpg" class="object-fit-fill  rounded w-100" alt="vidrio-reflecta">
					</div>
					<div class="mb-3 p-2 d-none d-md-block">
						<img src="../resources/vidrios/filtraplus.jpg" class="object-fit-fill  rounded w-100" alt="vidrios-entintados">
					</div>
				</div>
				<div class="card-body">
			    	<h5 class="card-title">Tipos de Vidrio</h5>
			    	<p class="card-text">Conoce más sobre vidrio, selecciona a tu gusto y necesidad. Pon en marcha el proyecto de tus sueños.</p>
			    	<a href="glass.php" type="button" class="btn btn-outline-danger">Ver mas</a>
			  	</div>
			</div>
		</section>	

		<div class="container-fluid fixed-bottom me-4 mb-3 clearfix">
			<a href="https://wa.me/5519623291/?text=¡¡Hola,%20Quisiera%20solicitar%20una%20cotización...!!" target="_blank" class="float-end"><i class="fa-brands fa-whatsapp fa-bounce" style="color: #b9c149;"></i></a>
		</div>
	</main>

	<?php
		include_once '../templates/pie.php';
		//Inclusion de los 
		$indiceJs = 0;
		while($indiceJs < count($actions)){
			echo "<script src='$actions[$indiceJs]'></script>";
			$indiceJs ++;
		}

		echo "<script src='../js/productos.js'></script>";
	?>

</body>
</html>