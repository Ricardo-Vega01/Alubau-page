<?php
    include_once '../templates/enlace.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="vidrio templado, vidrio de seguridad">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="description" content="Explicación y asesoramiento sobre vidrio templado, aplicación y usos en espacios arquitectonicos">
    <title>Templado</title> 
    <link rel="shortcut icon" href="../resources/favicon/favicon.ico" type="image/x-icon">
    <?php
        for ($indiceEstilos=0; $indiceEstilos < count($estilos); $indiceEstilos++) { 
            echo "<link rel='stylesheet' href='$estilos[$indiceEstilos]'>";
            echo "<link rel='preload' href='$estilos[$indiceEstilos]'>";
        }
        echo "<link rel='stylesheet' href='../css/templado.css'>";
    ?>
</head>
<body>
    <header>
        <?php include_once '../templates/menu.php'; ?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-7 align-self-center">
                    <img src="../resources/galeria/cvo-te.jpg" alt="barandal-curvo" class="img-fluid rounded">
                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col-12">
                            <img src="../resources/galeria/cancel-plegadizo.jpg" alt="fachada" class="img-fluid rounded">
                        </div>
                        <div class="col-12">
                            <img src="../resources/galeria/risco-canmuro.JPEG" alt="" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-4">
            <h2 class="text-primary text-end">¿Que es el vidrio templado?</h2>
            <article>
                <div class="d-flex flex-sm-row flex-col flex-nowrap"> 
                    <div class="pe-2 d-none d-sm-block">
                        <h5 class="text-center text-danger">¡Tal vez te interese..!</h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="glass.php">Tipos de vidrio</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#semiTemp">Semi-templado</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-100 mx-auto d-block">
                        <p class="alutemp">
                            <?php
                                $docTemp = file_get_contents("../resources/documents/alutemp.txt", FILE_USE_INCLUDE_PATH);
                                echo $docTemp;
                            ?>
                        </p>
                    </div>
                </div>
            </article>
            <section class="container my-3">
                <div class="row gx-5">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="ratio ratio-16x9">
                            <iframe src="../resources/media/proceso-curvos.mp4" frameborder="0" muted></iframe>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 align-self-center">
                        <article>
                            <h3 class="py-3 text-info">Vidrio Curvo</h3>
                            <p class="info-curvo">
                            Es un material para la construcción que se obtiene mediante el calentamiento del vidrio plano hasta su punto de plasticidad, dándole la forma deseada mediante el uso de moldes. El procedimiento más utilizado consiste en la colocación del vidrio plano horizontalmente sobre el molde. Una vez alcanzada la plasticidad del vidrio mediante calentamiento, su propio peso hará que se adapte y tome la forma del molde.
                            </p>
                        </article>
                    </div>
                </div>
            </section>
            <div class="container my-3">
                <div class="d-flex flex-sm-row">
                    
                    <div class="p-3 align-self-center">
                        <p class="fs-4">
                            Diferencias entre vidrio flotado, semi-tempado y templado.
                        </p>
                    </div>
                    <div class="">
                        <img src="../resources/img/diferencia.jpg" alt="diferencia templado" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="semiTemp" tabindex="-1" aria-labelledby="semiTempLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="semiTempLabel">Semi-Templado</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row gx-5">
                            <div class="col-5 align-self-center">
                                <img src="../resources/vidrios/glass.jpg" alt="vidrios" class="img-fluid rounded">
                            </div>
                            <div class="col-7">
                                <p class="semi-templado">
                                    <?php
                                        $docSemi = file_get_contents("../resources/documents/semiTemplado.txt", FILE_USE_INCLUDE_PATH);
                                        echo $docSemi;
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
        for ($indiceJs=0; $indiceJs < count($actions); $indiceJs++) { 
            echo "<script src='$actions[$indiceJs]'></script>";
        }
    ?>
</body>
</html>