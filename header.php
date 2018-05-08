<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>
    <script src="js/app.js"></script>

    <title>Grupo Galdiaz - Tienda Online</title>
</head>
<body>
<div class="scrollToTop"></div>
<header>
    <div class="bg-gg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav justify-content-end top-user-menu my-1 scrolled fx-sides">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-user-circle"></i> Cuenta
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cog"></i> Config.
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-heart"></i> Favoritos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-shopping-bag"></i> Compras
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-shopping-cart"></i> Carrito
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-power-off"></i> Cerrar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="header-gg" class="container mb-2">
        <div class="row">
            <div class="col-lg-4 text-center">
                <a href="index.php">
                    <img src="https://www.grupogaldiaz.com/Content/Template/images/home/logo_web.jpg" alt="Grupo Galdiaz"
                         class="img-fluid main-logo">
                </a>
            </div>
            <div class="col-lg-8">
                <div class="row h-100">
                    <div class="col-lg-12 d-flex justify-content-end">
                        <ul class="nav top-social-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <img src="img/social/fb.png" alt="">
                                    /GrupoGaldiaz
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <img src="img/social/ins.png" alt="">
                                    @grupo_galdiaz
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-12 d-flex align-items-end justify-content-end">
                        <ul class="nav top-misc-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">¿Quienes Somos?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Preguntas Frecuentes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contáctenos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div id="nb-fake-wrap"></div>
<nav id="main-navbar" class="navbar navbar-expand-md navbar-light bg-gg-yellow">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsCategory"
            aria-controls="navbarsCategory" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-brand mr-auto d-block d-sm-none text-center p-3">
        Categorías
    </div>
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarsCategory">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="http://example.com" id="dropdown01" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Decorando</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Decoración Princesa</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="http://example.com" id="dropdown01" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Decoración</a>
                    <div class="dropdown-menu multi-column columns-3" aria-labelledby="dropdown01">
                        <div class="row">
                            <div class="col-lg-4">
                                <a class="dropdown-item" href="#">Accesorios de plástico</a>
                                <a class="dropdown-item" href="#">Accesorios de Vidrio</a>
                                <a class="dropdown-item" href="#">Accesorios vintage</a>
                                <a class="dropdown-item" href="#">Accesorios de madera</a>
                                <a class="dropdown-item" href="#">Accesorios de metal</a>
                                <a class="dropdown-item" href="#">Adornos Cerámica</a>
                                <a class="dropdown-item" href="#">Bandejas de plástico</a>
                                <a class="dropdown-item" href="#">Bases de papel</a>
                                <a class="dropdown-item" href="#">Baúles y maletas</a>
                                <a class="dropdown-item" href="#">Cesta de mimbre</a>
                            </div>
                            <div class="col-lg-4">
                                <a class="dropdown-item" href="#">Cintas y mallas</a>
                                <a class="dropdown-item" href="#">Dispensadores de vidrio</a>
                                <a class="dropdown-item" href="#">Estante de cerámica</a>
                                <a class="dropdown-item" href="#">Estantes de plástico</a>
                                <a class="dropdown-item" href="#">Guirnaldas y Cortinas</a>
                                <a class="dropdown-item" href="#">Lámparas LED y Neón</a>
                                <a class="dropdown-item" href="#">Letras y números de madera</a>
                                <a class="dropdown-item" href="#">Linternas, porta velas y focos LED</a>
                                <a class="dropdown-item" href="#">Marcos</a>
                                <a class="dropdown-item" href="#">Mini empaque de plástico</a>
                            </div>
                            <div class="col-lg-4">
                                <a class="dropdown-item" href="#">Muebles de madera</a>
                                <a class="dropdown-item" href="#">Pirotines y porta dulces</a>
                                <a class="dropdown-item" href="#">Pizarras adhesivas</a>
                                <a class="dropdown-item" href="#">Pompones</a>
                                <a class="dropdown-item" href="#">Porta anillos y alcancías</a>
                                <a class="dropdown-item" href="#">Servilletas</a>
                                <a class="dropdown-item" href="#">Stickers y apliques decorativos</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">TODOS LOS PRODUCTOS</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="http://example.com" id="dropdown01" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Belleza</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Acrílicos para maquillaje</a>
                        <a class="dropdown-item" href="#">Espejos</a>
                        <a class="dropdown-item" href="#">Joyeros</a>
                        <a class="dropdown-item" href="#">Maletas de Maquillaje</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">TODOS LOS PRODUCTOS</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="http://example.com" id="dropdown01" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Empaques de Regalo</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Accesorio para fiestas</a>
                        <a class="dropdown-item" href="#">Banderines</a>
                        <a class="dropdown-item" href="#">Bolsas de plástico</a>
                        <a class="dropdown-item" href="#">Bolsas de papel</a>
                        <a class="dropdown-item" href="#">Cajas de regalo</a>
                        <a class="dropdown-item" href="#">Mini empaque de metal</a>
                        <a class="dropdown-item" href="#">Temática de unicornio</a>
                        <a class="dropdown-item" href="#">Virutas y rafia</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="http://example.com" id="dropdown01" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Verano</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Inflables</a>
                        <a class="dropdown-item" href="#">MOLINOS DE VIENTO</a>
                        <a class="dropdown-item" href="#">Náutico</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">TODOS LOS PRODUCTOS</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="http://example.com" id="dropdown01" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Maquinas</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Algodón</a>
                        <a class="dropdown-item" href="#">Chocolate</a>
                        <a class="dropdown-item" href="#">Popcorn</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">TODOS LOS PRODUCTOS</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="http://example.com" id="dropdown01" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Cocina</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Bomboneras y Dispensadores</a>
                        <a class="dropdown-item" href="#">Mason jars</a>
                        <a class="dropdown-item" href="#">Organizadores</a>
                        <a class="dropdown-item" href="#">Platos y vasos de acrílico</a>
                        <a class="dropdown-item" href="#">Platos de sitio plásticos</a>
                        <a class="dropdown-item" href="#">Repostería</a>
                        <a class="dropdown-item" href="#">Sorbetes</a>
                        <a class="dropdown-item" href="#">Toppers</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">TODOS LOS PRODUCTOS</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="http://example.com" id="dropdown01" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Jardinería</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Esferas y césped artificiales</a>
                        <a class="dropdown-item" href="#">Floreros</a>
                        <a class="dropdown-item" href="#">Flores de eva</a>
                        <a class="dropdown-item" href="#">Flores de poliester</a>
                        <a class="dropdown-item" href="#">Maceteros</a>
                        <a class="dropdown-item" href="#">Terrarios</a>
                        <a class="dropdown-item" href="#">Topiarios</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">TODOS LOS PRODUCTOS</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="btn-group">
            <a class="btn btn-search dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search"></i>
            </a>
            <div class="dropdown-search dropdown-menu dropdown-menu-right">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="">
                                <input type="text" class="form-control" placeholder="Buscar por descripción o código">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>