<?php
include_once '../templates/enlace.php';
$fila1 = ["6mm Vidrio Monolitico",31,29];
$fila2 = ["12mm Vidrio Monolitico",36,33];
$fila3 = ["6mm Vidrio + 11.5mm Aire + 6mm Vidrio",35,28];
$fila4 = ["6mm Vidrio + 0.76 EVA + 6mm Vidrio",38,34];
$fila5 = ["3mm / 0.76mm EVA / 3mm + 11.5mm aire + 3mm / 0.76mm EVA / 3mm", 42, 33];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="duo-vent, insulado, vidrio termico, vidrio doble, vidrio termo-acustico, vidrio anti-ruido">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="shortcut icon" href="../resources/favicon/favicon.ico" type="image/x-icon"> 
    <meta name="description" content="Vidrio insulado como alternativa a soluciones en canceleria con la finalidad de reducir el ruido del exterior y mayor confort en su hogar.">
    <title>Duo-Vent</title>
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
            <div class="row gx-5">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img src="../resources/galeria/esp-can.jpg" alt="casa-bernstein" class="img-fluid rounded">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 align-self-center my-3">
                    <h1 class="text-center text-primary">AluTherm</h1>
                    <h6 class="text-center text-muted">Vidrio Insulado</h6>
                </div>
            </div>
        </div>
        <div class="container my-3">
            <h2 class="text-info">Vidrio Insulado</h2>
            <article>
                <?php
                $docInsulado = file_get_contents("../resources/documents/alutherm.txt", FILE_USE_INCLUDE_PATH);
                echo $docInsulado;
                ?>
            </article>
        </div>
        <div class="section my-3 container">
            <h2 class="text-danger my-3">Control Acustico</h2>
            <table class="table table-info table-hover">
                <thead>
                    <tr>
                        <th>Sistema de Acristalamiento y Espesor</th>
                        <th>STC</th>
                        <th>OITC</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            for ($indiceFila1=0; $indiceFila1 < count($fila1); $indiceFila1++) { 
                            
                        ?>
                        <td>
                            <?php echo $fila1[$indiceFila1]; ?>
                        </td>
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            for ($indiceFila2=0; $indiceFila2 < count($fila2); $indiceFila2++) { 
                            
                        ?>
                        <td>
                            <?php echo $fila2[$indiceFila2]; ?>
                        </td>
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            for ($indiceFila3=0; $indiceFila3 < count($fila3); $indiceFila3++) { 
                            
                        ?>
                        <td>
                            <?php echo $fila3[$indiceFila3]; ?>
                        </td>
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            for ($indiceFila4=0; $indiceFila4 < count($fila4); $indiceFila4++) { 
                            
                        ?>
                        <td>
                            <?php echo $fila4[$indiceFila4]; ?>
                        </td>
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            for ($indiceFila5=0; $indiceFila5 < count($fila5); $indiceFila5++) { 
                            
                        ?>
                        <td>
                            <?php echo $fila5[$indiceFila5]; ?>
                        </td>
                        <?php
                            }
                        ?>
                    </tr>
                </tbody>
            </table>
            <h5>STC:</h5><p>Mide la presión de sonido en divisiones interiores de los edificios, donde los principales sonidos son de gente hablando o equipos de oficina.</p>
            <h5>OITC:</h5><p>Mide la presión de sonido para las paredes exteriores donde el sonido proviene de fuentes externas, como el tráfico.</p>
        </div>
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