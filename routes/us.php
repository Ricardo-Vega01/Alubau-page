<?php
	include_once '../templates/enlace.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Conoce mas sobre nuestra empresa, si estas por comenzar un nuevo proyecto o alguna remodelación contactanos.">
	<meta name="keywords" content="vidrio, canceleria, Aluabu, Glasstemp, vitro, vidrio templado">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="shortcut icon" href="../resources/favicon/favicon.ico" type="image/x-icon">
	<title>Nosotros</title>
	<link rel="shortcut icon" href="../resources/favicon/favicon.ico" type="image/x-icon">
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
	<link rel="stylesheet" href="../css/us.css">
</head>
<body>
	<?php include_once '../templates/menu.php'; ?>
	<main>
		<div class="container mt-5 pt-4 bg-light bg-opacity-75 p-2 rounded">
			<div class="clearfix mt-4 p-3">
			  <img src="../resources/img/mostradort.JPG" class="col-md-6 float-md-end mb-3 ms-md-3 img-fluid rounded" alt="Alubau-instalacion">
			  <h2 class="text-success">Alubau Glasstemp</h2>
				<article class="pe-3">
					  <p>
					  	Fundada en febrero de 2008, Alubau ha sido uno de los exponentes más conocidos en el mercado local.
					  </p>
					  <p>
					  	Durante 15 años ha escalado en la industria de la canceleria de forma exponencial, dando participación en el desarrollo de numerosos proyectos como: <strong>
					  		Hoteles, Edificios, Centros comerciales, Departamentos, Fraccionamientos, Agencias, Recidencias, etc.
					  	</strong>
					  </p>
					  <h4>¿Que hacemos?</h4>
					  <p>
					  	Somos especialistas en productos como: maquila de vidrio templado, producción de vidrio insulado; manufactura de ventanas, puertas y cancelería utilizando aluminio de líneas europeas; y producción de domos, canceles, fachadas, etc., mediante el uso intensivo de vidrio y herrajes. La planta está ubicada en Toluca Estado de México. 
					  </p>
				</article>
			</div>
		</div>

			
		<div class="container mt-3">
			<h3 class="text-secondary">Más sobre nosotros</h3>
			<div class="d-flex align-items-start">
				<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Misión</button>
				    
				    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Visión</button>
				    
				    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Valores</button>
		  		</div>

		  		<div class="tab-content bg-light rounded p-3" id="v-pills-tabContent">
		    		<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
		    			<p class="fs-6 text-danger-emphasis text-opacity-75 fw-semibold">
		    				Nuestra misión es resaltar que toda necesidad arquitectónica es posible solucionarla con diseño, calidad, tecnología e innovación a través del vidrio y el aluminio.
		    			</p>
		    		</div>
		    		<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
		    			<p class="fs-6 text-danger-emphasis text-opacity-75 fw-semibold">
		    				Ser la empresa líder en el mercado mexicano y Latinoamericano dentro de la industria del vidrio y aluminio arquitectónico con sistemas innovadores en tecnología y de alto valor agregado.
		    			</p>
		    		</div>
		    		<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
		    			<p class="fs-6 text-danger-emphasis text-opacity-75 fw-semibold">
		    				Compromiso, Lealtad, Integridad, Calidad, Resolución, Pasión, Transparencia, Empatia.
		    			</p>
		    		</div>
		  		</div>
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