<?php
	include_once '../templates/enlace.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Proyectos y obras realizadas por Alubau Glass. Asi mismo un catalogo de posibles aplicaciones de nuestros productos.">
	<meta name="keywords" content="barandales, canceles, fachadas, vidrio arquitectonico, mamparas, domos, pergolas, ventanas, accesos, oficinas, interiores, aluminio, vidrio">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="shortcut icon" href="../resources/favicon/favicon.ico" type="image/x-icon">
	<title>Galeria</title>
	<?php
		echo "<link rel='preload' href='../css/galeria.css'>";
		$indiceStyle = 0;
		while($indiceStyle < count($estilos)){
			echo "<link rel='preload' href='$estilos[$indiceStyle]'>";
	?>
	<link rel="stylesheet" href="<?php echo $estilos[$indiceStyle];?>">
	<?php 
			$indiceStyle ++;	
		}
		echo "<link rel='stylesheet' href='../css/galeria.css'>"; 
	?>

</head>
<body>
	<?php include_once '../templates/menu.php'; ?>
	<main>
		<div class="container-fluid p-3 mt-3">
			<div class="ratio ratio-21x9 mt-5">
			  <video src="../resources/media/Alubau.mp4" title="YouTube video" allowfullscreen muted autoplay></video>
			</div>
			</div>
		</div>

		<div class="container text-center">
		  <h2 class="text-primary my-2">Conocé nuestro desempeño.<hr></h2>
		  <div class="row g-2">
		  	<?php
		  		$archivos = array();
		  		$iterador = new FilesystemIterator("../resources/galeria/");
		  		foreach ($iterador as $entidad) {
		  	?>
		    <div class="col-md-4 col-lg-4 col-sm-12">
		    	<figure class="figure p-2 mb-2 border-opacity-25 rounded">
					<img src="<?php echo "../resources/galeria/".$archivos[] = $entidad->getFilename(); ?>" class="figure-img img-fluid rounded">
				</figure>
		    </div>
		   <?php
		   		}
		   ?>
		  </div>
		</div>
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
	?>
</body>
</html>