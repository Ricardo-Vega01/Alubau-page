<?php
include_once '../templates/enlace.php';
include_once '../templates/vidrios.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="vidrios, vidrio, tipos de vidrio, vidrio vitro, vidrio arquitectonico,espejos,vidrio reflecta, vidrio claro, vidrio de color">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="description" content="Catalogo de vidrios, fichas tecnicas y asesoramiento en vidrio arquitectonico. Soluciones en canceleria.">
    <link rel="shortcut icon" href="../resources/favicon/favicon.ico" type="image/x-icon">
    <title>Vidrios</title>
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
            <img src="../resources/galeria/20150204_114248.jpg" alt="espejo-bano" class="img-fluid">
        </div>
        <section class="container my-3">
            <h1 class="text-danger">¿Alguna vez te haz preguntado que vidrio será mejor?</h1>
            <article class="my-4">
                <div class="row gx-3">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <p>
                            <?php
                            $docGlass = file_get_contents("../resources/documents/introGlass.txt", FILE_USE_INCLUDE_PATH);
                            echo $docGlass;
                            ?>
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img src="../resources/vidrios/pyrosol-6.jpg" alt="vidrio-reflecta" class="img-fluid rounded shadow">
                    </div>
                </div>
            </article>
        </section>
        <section class="container my-3">
            <h2 class="text-primary my-2">Tipos de Vidrio</h2>
            <div class="accordion accordion-flush" id="controlVidrios">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#vidriosNeutros" aria-expanded="false" aria-controls="vidriosNeutros">
                            Vidrios Neutros (Claros).
                        </button>
                    </h2>
                    <div id="vidriosNeutros" class="accordion-collapse collapse" data-bs-parent="#controlVidrios">
                        <div class="accordion-body">
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                <?php
                                for ($indiceClaro = 0; $indiceClaro < count($neutrosTitle) && $indiceClaro < count($imgNeutro) && $indiceClaro < count($descripcionClaro) && $indiceClaro < count($linkClaro); $indiceClaro++) {
                                ?>
                                    <div class="col">
                                        <div class="card shadow">
                                            <button style="border: none;" type="button" data-bs-toggle="modal" data-bs-target="#<?php echo "vidrio" . $indiceClaro; ?>">
                                                <img src="<?php echo $imgNeutro[$indiceClaro]; ?>" class="card-img-top img-fluid" alt="<?php echo $neutrosTitle[$indiceClaro]; ?>">
                                            </button>
                                            <div class="card-footer">
                                                <h5 class="card-title text-center text-body-secondary"><?php echo "Vidrio " . $neutrosTitle[$indiceClaro]; ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="<?php echo "vidrio" . $indiceClaro; ?>" tabindex="-1" aria-labelledby="<?php echo "vidrio" . $indiceClaro; ?>Label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="<?php echo "vidrio" . $indiceClaro; ?>Label"><?php echo $neutrosTitle[$indiceClaro]; ?></h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <img src="<?php echo $imgNeutro[$indiceClaro]; ?>" class="card-img-top img-fluid rounded" alt="<?php echo $neutrosTitle[$indiceClaro]; ?>">
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-6 align-self-center">
                                                            <p>
                                                                <?php
                                                                echo $descripcionClaro[$indiceClaro];
                                                                ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="<?php echo $linkClaro[$indiceClaro]; ?>" target="_blank" class="btn btn-primary" type="button">Ver Ficha</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#vidriosEntintados" aria-expanded="false" aria-controls="vidriosEntintados">
                            Vidrios Entintados (Color).
                        </button>
                    </h2>
                    <div id="vidriosEntintados" class="accordion-collapse collapse" data-bs-parent="#controlVidrios">
                        <div class="accordion-body">
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                <?php for ($indiceColor = 0; $indiceColor < count($imgColor) && $indiceColor < count($colorTitle) && $indiceColor < count($descripcionColor) && $indiceColor < count($linkColor); $indiceColor++) {
                                ?>
                                    <div class="col">
                                        <div class="card shadow">
                                            <button style="border: none;" type="button " data-bs-toggle="modal" data-bs-target="#<?php echo "color" . $indiceColor; ?>">
                                                <img src="<?php echo $imgColor[$indiceColor]; ?>" class="card-img-top img-fluid" alt="<?php echo $colorTitle[$indiceColor]; ?>">
                                            </button>
                                            <div class="card-footer">
                                                <h5 class="card-title text-body-secondary text-center"><?php echo $colorTitle[$indiceColor]; ?></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="<?php echo "color" . $indiceColor; ?>" tabindex="-1" aria-labelledby="<?php echo "color" . $indiceColor; ?>Label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="<?php echo "color" . $indiceColor; ?>Label"><?php echo $colorTitle[$indiceColor]; ?></h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <img src="<?php echo $imgColor[$indiceColor]; ?>" class="card-img-top img-fluid rounded" alt="<?php echo $colorTitle[$indiceColor]; ?>">
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-6 align-self-center">
                                                            <p>
                                                                <?php
                                                                echo $descripcionColor[$indiceColor];
                                                                ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="<?php echo $linkColor[$indiceColor]; ?>" type="button" target="_blank" class="btn btn-primary">Ver Ficha</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                <?php
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#vidriosReflecta" aria-expanded="false" aria-controls="vidriosReflecta">
                            Vidrios Reflectivos.
                        </button>
                    </h2>
                    <div id="vidriosReflecta" class="accordion-collapse collapse" data-bs-parent="#controlVidrios">
                        <div class="accordion-body">
                            <h3 class="text-danger my-4">Reflectividad Media-Baja</h3>
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                <?php
                                for ($indiceReflectaMb = 0; $indiceReflectaMb < count($reflectaMb) && $indiceReflectaMb < count($imgRmB) && $indiceReflectaMb < count($descripcionRmb); $indiceReflectaMb++) {
                                ?>
                                    <div class="col">
                                        <div class="card shadow">
                                            <button style="border: none;" type="button" data-bs-toggle="modal" data-bs-target="#<?php echo "rmb" . $indiceReflectaMb ?>">
                                                <img src="<?php echo $imgColor[$indiceReflectaMb]; ?>" class="card-img-top img-fluid" alt="<?php echo $reflectaMb[$indiceReflectaMb]; ?>">
                                            </button>
                                            <div class="card-footer">
                                                <h5 class="card-title text-center text-body-secondary"><?php echo $reflectaMb[$indiceReflectaMb]; ?></h5>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="<?php echo "rmb" . $indiceReflectaMb ?>" tabindex="-1" aria-labelledby="<?php echo "rmb" . $indiceReflectaMb ?>Label" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="<?php echo "rmb" . $indiceReflectaMb ?>Label"><?php echo $reflectaMb[$indiceReflectaMb]; ?></h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                                <img src="<?php echo $imgRmB[$indiceReflectaMb]; ?>" class="card-img-top img-fluid rounded" alt="<?php echo $reflectaMb[$indiceReflectaMb]; ?>">
                                                            </div>
                                                            <div class="col-sm-12 col-md-6 col-lg-6 align-self-center">
                                                                <p>
                                                                    <?php
                                                                    echo $descripcionRmb[$indiceReflectaMb];
                                                                    ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="<?php
                                                            if($indiceReflectaMb < 3){
                                                                echo "https://www.vitroglazings.com/media/2n1drqaj/ficha-tecnica-vistacool.pdf";
                                                            }else{
                                                                echo "https://www.vitroglazings.com/media/gqddutd0/ficha-tecnica-lumax-2020.pdf#Lumax";
                                                            }
                                                        ?>" type="button" target="_blank" class="btn btn-primary">Ver Ficha</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                <?php } ?>
                            </div>

                            <h3 class="text-danger my-4">Reflectividad Alta</h3>
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                <?php
                                for ($indiceRA = 0; $indiceRA < count($reflectaAlta) && $indiceRA < count($imgRa); $indiceRA++) {
                                ?>
                                    <div class="col">
                                        <div class="card shadow">
                                            <button style="border: none;" type="button" data-bs-toggle="modal" data-bs-target="#<?php echo "RA" . $indiceRA; ?>">
                                                <img src="<?php echo $imgRa[$indiceRA]; ?>" class="card-img-top img-fluid" alt="<?php echo $reflectaAlta[$indiceRA]; ?>">
                                            </button>

                                            <div class="card-footer">
                                                <h5 class="card-title text-center text-body-secondary"><?php echo $reflectaAlta[$indiceRA]; ?></h5>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="<?php echo "RA" . $indiceRA; ?>" tabindex="-1" aria-labelledby="<?php echo "RA" . $indiceRA; ?>Label" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="<?php echo "RA" . $indiceRA; ?>Label"><?php echo $reflectaAlta[$indiceRA]; ?></h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                                <img src="<?php echo $imgRa[$indiceRA]; ?>" class="card-img-top img-fluid rounded" alt="<?php echo $reflectaAlta[$indiceRA]; ?>">
                                                            </div>
                                                            <div class="col-sm-12 col-md-6 col-lg-6 align-self-center">
                                                                <p>
                                                                    <?php
                                                                    echo $descripcionRA;
                                                                    ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="https://www.vitroglazings.com/media/piapt0ci/ficha-tecnica-solarcool.pdf" type="button" target="_blank" class="btn btn-primary">Ver Ficha</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#vidrioDecorativo" aria-expanded="false" aria-controls="vidrioDecorativo">
                            Vidrios Decorativos.
                        </button>
                    </h2>
                    <div id="vidrioDecorativo" class="accordion-collapse collapse" data-bs-parent="#controlVidrios">
                        <div class="accordion-body">
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                <?php for ($indiceDecorativo = 0; $indiceDecorativo < count($imgDec) && $indiceDecorativo < count($decorativos) && $indiceDecorativo < count($descripcionDec) && $indiceDecorativo < count($linkDec); $indiceDecorativo++) {
                                ?>
                                    <div class="col">
                                        <div class="card shadow">
                                            <button style="border: none;" type="button" data-bs-toggle="modal" data-bs-target="#<?php echo "dec" . $indiceDecorativo; ?>">
                                                <img src="<?php echo $imgDec[$indiceDecorativo]; ?>" class="card-img-top img-fluid" alt="<?php echo $decorativos[$indiceDecorativo]; ?>">
                                            </button>
                                            <a href=""></a>
                                            <div class="card-footer">
                                                <h5 class="card-title text-body-secondary text-center"><?php echo $decorativos[$indiceDecorativo]; ?></h5>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="<?php echo "dec" . $indiceDecorativo; ?>" tabindex="-1" aria-labelledby="<?php echo "dec" . $indiceDecorativo; ?>Label" aria-hidden="true">
                                            <div class="modal-dialog  modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="<?php echo "dec" . $indiceDecorativo; ?>Label"><?php echo $decorativos[$indiceDecorativo]; ?></h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                                <img src="<?php echo $imgDec[$indiceDecorativo]; ?>" class="card-img-top img-fluid rounded" alt="<?php echo $reflectaAlta[$indiceDecorativo]; ?>">
                                                            </div>
                                                            <div class="col-sm-12 col-md-6 col-lg-6 align-self-center">
                                                                <p>
                                                                    <?php
                                                                    echo $descripcionDec[$indiceDecorativo];
                                                                    ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="<?php echo $linkDec[$indiceDecorativo]; ?>" type="button" target="_blank" class="btn btn-primary">Ver Ficha</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                <?php } ?>
                            </div>
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