<?php
include_once '../templates/enlace.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Vidrio de Seguridad, Laminado, Vidrio Bindado, vidrio inastillable,PVB, EVA, Vidrio inteligente, vidrio doble">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Laminado</title>
    <meta name="description" content="DEscripción y caracteristicas de un vidrio laminado o inastillable, para alternativas en canceleria">
    <link rel="shortcut icon" href="../resources/favicon/favicon.ico" type="image/x-icon">
    <?php
    for ($indiceEstilos = 0; $indiceEstilos < count($estilos); $indiceEstilos++) {
        echo "<link rel='stylesheet' href='$estilos[$indiceEstilos]'>";
        echo "<link rel='preload' href='$estilos[$indiceEstilos]'>";
    }
    echo "<link rel='stylesheet' href='../css/general.css'>";
    ?>
</head>

<body>
    <header>
        <?php include_once '../templates/menu.php'; ?>
    </header>
    <main>
        <div class="container mt-5 pt-4">
            <div class="mt-3 row gx-5">
                <div class="col-sm-12 col-md-5 col-lg-5 align-self-center">
                    <h1 class="text-secondary text-center">Alulam</h1>
                    <h6 class="text-center">Vidrio Laminado &#9658; Vidrio de seguridad</h6>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-7">
                    <div class="ratio ratio-4x3">
                        <video src="../resources/media/Smartfitlm.mp4" muted autoplay></video>
                    </div>
                </div>
            </div>
        </div>

        <article class="container my-3" id="info-laminado">
            <h2 class="text-success">¿Que es el laminado?</h2>
            <p class="py-2">
                <?php
                $docLam = file_get_contents("../resources/documents/alulam.txt", FILE_USE_INCLUDE_PATH);
                echo $docLam;
                ?>
            </p>
        </article>
        <section class="container my-3">
            <h3 class="text-danger">Tipos de Lamindo</h3>
            <div class="card mb-3 bg-secondary bg-opacity-75 rounded">
                <div class="row g-0">
                    <div class="col-md-4 align-content-center py-3 text-center">
                        <video src="../resources/media/Laminado-Smatfilm.mp4" controls muted autoplay></video>
                    </div>
                    <div class="col-md-8 align-self-center">
                        <div class="card-body">
                            <h4 class="card-title text-danger">Pelicula Inteligente (smart film)</h4>
                            <p class="card-text text-light">
                                <?php 
                                    $docSmart = file_get_contents("../resources/documents/peliculaInteligente.txt", FILE_USE_INCLUDE_PATH);
                                    echo $docSmart;
                                ?>
                            </p>
                            <p class="card-text"><small class="text-muted">Solo sobre pedido.</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid fixed-bottom me-4 mb-3 clearfix">
            <a href="https://wa.me/5519623291/?text=¡¡Hola,%20Quisiera%20solicitar%20una%20cotización...!!" target="_blank" class="float-end"><i class="fa-brands fa-whatsapp fa-bounce" style="color: #b9c149;"></i></a>
        </div>
    </main>
    <?php
    include_once '../templates/pie.php';
    for ($indiceJs = 0; $indiceJs < count($actions); $indiceJs++) {
        echo "<script src='$actions[$indiceJs]'></script>";
    }
    ?>
</body>

</html>