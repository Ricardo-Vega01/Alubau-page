<?php
include_once '../templates/enlace.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Contacto Alubau, realización de cotizaciones pedidos y asesoramiento.">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Contacto</title>
    <link rel="shortcut icon" href="../resources/favicon/favicon.ico" type="image/x-icon">
    <?php
    for ($indiceEstilos = 0; $indiceEstilos < count($estilos); $indiceEstilos++) {
        echo "<link rel='stylesheet' href='$estilos[$indiceEstilos]'>";
        echo "<link rel='preload' href='$estilos[$indiceEstilos]'>";
        echo "<link rel='stylesheet' href='../css/about.css'>";
    }
    ?>
</head>

<body>
    <header>
        <?php include_once '../templates/menu.php'; ?>
    </header>
    <main>
        <div class="container-fluid shadow mt-5 p-4 bg-info bg-gradient bg-opacity-10">
            <div class="row gx-5 p-4">
                <div class="col-sm-12 col-md-6 col-lg-6 align-self-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15063.190913168906!2d-99.6333192!3d19.2911605!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d265cf50000001%3A0x23006cebf58af189!2sGlasstemp%20Alubau!5e0!3m2!1ses!2smx!4v1700279588227!5m2!1ses!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h2 class="text-danger my-3">Contactanos</h2>
                    <form class="needs-validation" id="contacto" action="../templates/data.php" method="post" novalidate>
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="form-floating mb-3 has-validation position-relative" id="cliente">
                                    <input type="text" name="cliente" id="nameCliente" placeholder="Organizacion" class="form-control rounded" minlength="13" required>
                                    <label for="nameCliente">Nombre de cliente o Empresa</label>

                                    <div class="invalid-tooltip">
                                        ¡Por favor,verifique esta información!.
                                    </div>
                                    <p class="text-danger text-error d-none">*Solo se permiten letras.</p>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating mb-3 has-validation position-relative" id="direction">
                                    <input type="text" name="direction" id="direccion" class="form-control rounded" placeholder="Direccion" required>
                                    <label for="direccion">Domicilio</label>

                                    <div class="invalid-tooltip">
                                        ¡Por favor,verifique esta información!.
                                    </div>
                                    <p class="text-danger text-error d-none">*Ingresa solo numeros y letras.</p>

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating mb-3 has-validation position-relative">
                                    <select class="form-select" id="floatingSelectGrid" name="motivo" required>
                                        <option value="1">Solicitar cotización.</option>
                                        <option value="2">Solicitar asesoria tecnica.</option>
                                        <option value="3">Solicitar mas información sobre procesos o productos.</option>
                                        <option value="4">Realizar una cita en obra.</option>
                                        <option value="5">Discutir un posible proyecto.</option>
                                    </select>
                                    <label for="floatingSelectGrid">Motivo del contacto</label>

                                    <div class="invalid-tooltip">
                                        ¡Por favor,verifique esta información!.
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating mb-3 has-validation position-relative" id="noTel">
                                    <input type="tel" name="noTel" id="telefono" class="form-control rounded" placeholder="telefono" minlength="10" maxlength="10" required>
                                    <label for="telefono">Numero de Telefono</label>

                                    <div class="invalid-tooltip">
                                        ¡Por favor,verifique esta información!.
                                    </div>

                                    <p class="text-danger text-error d-none ">*Solo es posible ingresar numeros.</p>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating mb-3 has-validation position-relative" id="mail">
                                    <input type="email" name="mail" id="email" class="form-control rounded" placeholder="noreply@mailto.com" required>
                                    <label for="email">Correo Electronico</label>

                                    <div class="invalid-tooltip">
                                        ¡Por favor,verifique esta información!.
                                    </div>
                                    <p class="text-danger text-error d-none">*Solo se permiten letras, numeros, guiones y puntos.</p>

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3 has-validation position-relative">
                                    <label for="descripcion" class="form-label">¿Como podemos ayudarte?.</label>
                                    <textarea class="form-control rounded" id="descripcion" name="message" id="mensaje" rows="3" required minlength="150" autocapitalize="sentences" spellcheck="true"></textarea>
                                </div>

                                <div class="invalid-tooltip">
                                    ¡Por favor,verifique esta información!.
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex flex-row mb-3 d-inline-flex my-3">
                <ul class="list-group list-group-horizontal align-self-center">
                    <li class="list-group-item">
                        <a href="https://www.facebook.com/alubau.cristaltemplado/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li class="list-group-item">
                        <a href="https://www.instagram.com/alubauglass/?hl=es-la" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li class="list-group-item">
                        <a href="mailto:ventas@aubauglass.com" target="_blank"><i class="fa-solid fa-envelope"></i></a>
                    </li>
                    <li class="list-group-item">
                        <a href="https://wa.me/5519623291/?text=¡¡Hola,%20Quisiera%20solicitar%20una%20cotización...!!" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    </li>
                </ul>
                <div class="p-3">
                    <p>
                        Av. Primero de Mayo 1311, Reforma y FFCC Nacionales, 50070 Toluca de Lerdo, México. <br>
                        Tel: 7225411322
                    </p>
                </div>
            </div>
        </div>
    </main>
    <?php
    include_once '../templates/pie.php';
    for ($indiceJs = 0; $indiceJs < count($actions); $indiceJs++) {
        echo "<script src='$actions[$indiceJs]'></script>";
    }
    echo "<script src='../js/formulario.js'></script>";
    ?>
</body>

</html>