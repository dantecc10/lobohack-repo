<!DOCTYPE html>
<html data-bs-theme="dark" lang="es-mx">
<?php
include "php scripts/functions.php";
?>

<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inicio - DEPORTEX</title>
    <meta property="og:image" content="https://soccer.castelancarpinteyro.com/assets/img/deportex/DeportEX Gold Edition VFX.png">
    <meta name="author" content="Dante Castelán Carpinteyro">
    <meta name="description" content="Plataforma de gestión de ligas de fútbol, consulta de resultados, equipos y jugadores. Administración arbitral.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="DEPORTEX">
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "DEPORTEX",
            "url": "https://soccer.castelancarpinteyro.com"
        }
    </script>
    <link rel="icon" type="image/png" sizes="2000x2000" href="assets/img/deportex/DeportEX%20Logo%20Minimalista%20BLACK%20GREEN%20EDITION%20VFX.png?h=6baf041d5b489f75a71934a78277e96f">
    <link rel="icon" type="image/png" sizes="2000x2000" href="assets/img/deportex/DeportEX%20Logo%20Minimalista%20WHITE%20EDITION.png?h=6baf041d5b489f75a71934a78277e96f" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/png" sizes="2000x2000" href="assets/img/deportex/DeportEX%20Logo%20Minimalista%20BLACK%20GREEN%20EDITION%20VFX.png?h=6baf041d5b489f75a71934a78277e96f">
    <link rel="icon" type="image/png" sizes="2000x2000" href="assets/img/deportex/DeportEX%20Logo%20Minimalista%20WHITE%20EDITION.png?h=6baf041d5b489f75a71934a78277e96f" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/png" sizes="2000x2000" href="assets/img/deportex/DeportEX%20Logo%20Minimalista%20BLACK%20GREEN%20EDITION%20VFX.png?h=6baf041d5b489f75a71934a78277e96f">
    <link rel="icon" type="image/png" sizes="2000x2000" href="assets/img/deportex/DeportEX%20Logo%20Minimalista%20BLACK%20GREEN%20EDITION%20VFX.png?h=6baf041d5b489f75a71934a78277e96f">
    <link rel="icon" type="image/png" sizes="2224x2002" href="assets/img/deportex/DEPORTEX%20BLACK%20VERSION.png?h=6baf041d5b489f75a71934a78277e96f">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=254a09188e530cb03e8e344c8d2feb3e">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Staatliches&amp;display=swap'">
    <link rel="stylesheet" href="assets/css/soccer.css?h=af32969ba346b903b41d43495a7c2b91">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css?h=e737f76df021b46fa7180f48799a5d20">
    <script src="assets/js/fetcher.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-white clean-navbar main-bg-color navbar-light">
        <div class="container"><a class="navbar-brand logo" href="index.html#"><img class="bs-icon-sm" src="assets/img/deportex/KIGO.png?h=a8c6d158be0c9ec8c98ef7e1beaf40af" style="max-height: 45px !important;"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item px-0 pe-lg-4 pe-xl-5"><a class="nav-link active text-center custom-font third-color rem-adjustment" href="/#table"><i class="fa fa-home"></i>&nbsp;Inicio</a></li>
                    <li class="nav-item px-0 pe-lg-4 pe-xl-5"><a class="nav-link active text-center custom-font third-color rem-adjustment" href="/#matches"><img src="assets/img/deportex/partidos.svg?h=1fd7a22190fe07882dd12f90bcdafbee">&nbsp;PARTIDOS</a></li>
                    <li class="nav-item px-0 pe-lg-4 pe-xl-5"><a class="nav-link text-center custom-font third-color rem-adjustment" href="about-us.html"><img src="assets/img/deportex/equipos.svg?h=1fd7a22190fe07882dd12f90bcdafbee">&nbsp;EQUIPOS</a></li>
                    <li class="nav-item px-0 pe-lg-4 pe-xl-5"><a class="nav-link text-center custom-font third-color rem-adjustment" href="contact-us.html"><img src="assets/img/deportex/jugadores.svg?h=1fd7a22190fe07882dd12f90bcdafbee">&nbsp;JUGADORES</a></li>
                    <li class="nav-item px-0 pe-lg-4 pe-xl-5"><a class="nav-link text-center custom-font main-color rem-adjustment submain-bg-color rounded-3" href="login.html"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-user-circle">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                            </svg>&nbsp;Entrar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page landing-page" style="background-color: black;">
        <section id="table" class="clean-block features">
            <div class="container">
                <div class="block-heading mb-2">
                    <h2 class="text-info mb-0 main-color custom-font">Información de tráfico</h2>
                    <p class="main-color custom-font">Consulta los vehículos en las ubicaciones</p>
                </div>
                <div class="row justify-content-center">
                    <?php
                    $semaphores_fields = [
                        'id_semaphore',
                        'address_semaphore',
                        'latitude_semaphore',
                        'longitude_semaphore',
                        'cars_quantity_semaphore'
                    ];
                    $data = sql_debug_fetcher('semaphores', $semaphores_fields, "SELECT * FROM `semaphores`");
                    $color = "green";
                    for ($i = 0; $i < sizeof($data[0]); $i++) {
                        switch ($color) {
                            case "green":
                                $imgs = ('<div class="col col-4" style="height: 3rem;"><span><img src="green.png" style="max-height: 3rem; width: auto;"></span></div>
                                        <div class="col col-4" style="height: 3rem;"><span><img src="gray.png" style="max-height: 3rem; width: auto;"></span></div>
                                        <div class="col col-4" style="height: 3rem;"><span><img src="gray.png" style="max-height: 3rem; width: auto;"></span></div>');
                                break;
                            case "yellow":
                                $imgs = ('<div class="col col-4" style="height: 3rem;"><span><img src="gray.png" style="max-height: 3rem; width: auto;"></span></div>
                                        <div class="col col-4" style="height: 3rem;"><span><img src="yellow.png" style="max-height: 3rem; width: auto;"></span></div>
                                        <div class="col col-4" style="height: 3rem;"><span><img src="gray.png" style="max-height: 3rem; width: auto;"></span></div>');
                                break;
                            case "red":
                                $imgs = ('<div class="col col-4" style="height: 3rem;"><span><img src="gray.png" style="max-height: 3rem; width: auto;"></span></div>
                                        <div class="col col-4" style="height: 3rem;"><span><img src="gray.png" style="max-height: 3rem; width: auto;"></span></div>
                                        <div class="col col-4" style="height: 3rem;"><span><img src="red.png" style="max-height: 3rem; width: auto;"></span></div>');
                                break;
                            default:
                                $imgs = null;
                                break;
                        }
                        echo ('<div class="col col-12">
                        <div class="row">
                            <div class="col text-center fs-3 fw-bold custom-font"><span>' . $data[0][$i]["address_semaphore"] . '</span></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col text-center fs-4 custom-font"><span>&nbsp;<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor">
                                                <path d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M20 10h-3V8.86c1.72-.45 3-2 3-3.86h-3V4c0-.55-.45-1-1-1H8c-.55 0-1 .45-1 1v1H4c0 1.86 1.28 3.41 3 3.86V10H4c0 1.86 1.28 3.41 3 3.86V15H4c0 1.86 1.28 3.41 3 3.86V20c0 .55.45 1 1 1h8c.55 0 1-.45 1-1v-1.14c1.72-.45 3-2 3-3.86h-3v-1.14c1.72-.45 3-2 3-3.86zm-8 9c-1.11 0-2-.9-2-2s.89-2 2-2c1.1 0 2 .9 2 2s-.89 2-2 2zm0-5c-1.11 0-2-.9-2-2s.89-2 2-2c1.1 0 2 .9 2 2s-.89 2-2 2zm0-5c-1.11 0-2-.9-2-2 0-1.11.89-2 2-2 1.1 0 2 .89 2 2 0 1.1-.89 2-2 2z"></path>
                                            </svg>&nbsp;Semáforo ' . $data[0][$i]['id_semaphore'] . '</span></div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col align-self-center col-10 rounded-5 text-center py-3" style="background-color: var(--bs-gray);min-height: 4rem;text-align: center;">
                                        <div class="row text-center d-xl-flex justify-content-xl-center align-items-xl-center col-12 semaphore" style="color: gray;">
                                            ' . $imgs . '
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col text-center fs-4 custom-font"><span class="custom-font">&nbsp;Autos detectados&nbsp;</span><span class="main-color">En tiempo real</span></div>
                                </div>
                                <div class="row text-center">
                                    <div class="col"><span class="fs-3 fw-bold count-container">' . $data[0][$i][$semaphores_fields[4]] . '</span></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col text-center fs-4 custom-font"><span><i class="typcn typcn-location"></i>&nbsp;Ubicación</span></div>
                                </div>
                                <div class="row iframe-container">
                                    <div>
                                        <iframe allowfullscreen="" frameborder="0" src="https://maps.google.com/maps?q=' . $data[0][$i][$semaphores_fields[2]] . ',' . $data[0][$i][$semaphores_fields[3]] . '&amp;z=15&amp;output=embed" width="100%" min-height="200px"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>');
                    }
                    ?>
                </div>
            </div>
        </section>
    </main><!-- Start: Footer Dark -->
    <footer class="page-footer dark" style="background-color: black;">
        <div class="container">
            <div class="row rounded-4" style="background-color: var(--main-background-color);">
                <div class="col-sm-3">
                    <h5 style="filter: blur(0px) !important;">Empieza</h5>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Iniciar sesión</a></li>
                        <li><a href="#">Descargas</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Acerca de</h5>
                    <ul>
                        <li><a href="#">Desarrollador</a></li>
                        <li><a href="#">Contáctanos</a></li>
                        <li><a href="#">Reseña</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Soporte</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Asistencia</a></li>
                        <li><a href="#">Datos</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Términos de uso</a></li>
                        <li><a href="#">Política de privacidad</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright" style="background: var(--main-background-color);">
            <p>© 2024 Copyright DEPORTEX</p>
        </div>
    </footer><!-- End: Footer Dark -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js?h=6a37ea9c996b05f763161c73127d66bc"></script>
    <script src="assets/js/theme.js?h=a083aeb15550c5e1266c666e8a5846d9"></script>
</body>

</html>