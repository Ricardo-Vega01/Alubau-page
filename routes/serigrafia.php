<?php
include_once '../templates/enlace.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="pintura en vidrio, vidrio pintado, serigrafia en vidrio, vidrio de color, vidrio decorativo">
    <meta name="description" content="Explicación y conocimiento del vidrio pintado o serigrafido, mención de posibles aplicaciones e implementaciones en nuevos proyectos.">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="shortcut icon" href="../resources/favicon/favicon.ico" type="image/x-icon">
    <title>Serigrafia</title>
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
        <div class="container shadow">
            <img src="../resources/galeria/IMG_1931.jpeg" alt="Dormitorio" class="img-fluid rounded p-3">
        </div>
        <section class="container my-4">
            <div class="row gx-3">
                <div class="col-sm-12 col-md-4 col-lg-4 align-self-center">
                    <h1 class="text-center text-primary">Serigrafia</h1>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <article class="p-2">
                        <p>
                            <?php
                            $docSerigrafia = file_get_contents("../resources/documents/serigrafia.txt", FILE_USE_INCLUDE_PATH);
                            echo $docSerigrafia;
                            ?>
                        </p>
                    </article>
                </div>
            </div>
        </section>
        <div class="container my-3">
            <div class="row gx-5">
                <div class="col-sm-12 col-md-5 col-lg-5">
                    <img src="../resources/Productos/muesta-serigrafia.jpg" alt="serigrafia-diseño" class="img-fluid rounded">
                </div>
                <div class="col-sm-12 col-md-7 col-lg-7 align-self-center">
                    <h3>Aplicacion y ventajas:</h3>
                    <p>
                        Es posible ver este tipo de vidrios en fachadas, mamparase incluso paredes de vidrio cuya tonalidad resulta impactante según el espacio tipo de vidrio y tono de la pintura en cuestion. Se recomienda que este proceso se realice en <a href="glass.php">Vidrios Neutros</a>.
                    </p>
                    <ol>
                        <li>
                            Resistente a Rayos UV.
                        </li>
                        <li>
                            La pintura no se raya.
                        </li>
                        <li>
                            Se puede hace con diseños.
                        </li>
                        <li>
                            Acabado antiderrapante.
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <section class="container my-4">
            <div class="row gx-3">
                <div class="col-sm-12 col-md-7 col-lg-7 align-self-center">
                    <article class="p-2">
                        <h2 class="text-primary">Pintura Organica</h2>
                        <p>
                            <?php
                            $docOrganica = file_get_contents("../resources/documents/organica.txt", FILE_USE_INCLUDE_PATH);
                            echo $docOrganica;
                            ?>
                        </p>
                    </article>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-5">
                    <img src="../resources/Productos/Vidrio-Serigrafiado.jpg" alt="pintura organica" class="img-fluid rounded">
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