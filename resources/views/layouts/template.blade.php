<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- styles --}}

    {{-- para pasar los arhivos css y js a la carpeta resource tienes que tener instalado vite js --}}

    {{-- links styles --}}
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="/css/styles.css" />
    <link rel="stylesheet" href="/css/template/estilos.css" />
    <link rel="stylesheet" href="/css/all.min.css" />


    {{-- links bootstrap --}}
    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/dataTables.bootstrap5.min.css" />

    {{-- links logo --}}
    <link rel="icon" href="/images/logos.png" type="image/png">
    <link rel="icon" href="/images/logo-removebg-preview.ico" type="image/png">

    {{-- links --}}
    {{-- links --}}
</head>

<body>
    {{-- header --}}
    <header>
        <div class="header-button">
            <div class="header-button-icon icon__menu">
                <i id="btn_open"><img src="images/template/almuadilla.svg" alt="" srcset="" /></i>
            </div>
            <div class="header-logoRepublica"><img src="images/template/gob_2.png"></div>
            <div class="header-button-logos-cantv">
                <img class="img" src="images/template/logo-Cantv.png" />
            </div>
        </div>
    </header>

    {{-- sidebar --}}
    <aside>
        <div class="menu__side" id="menu_side">
            <div class="perfil">
                <h4>Unidad de Auditoria Interna</h4>

                <figure class="perfil-figure" style="width: 100%; displ">
                    <img src="./images/template/persona.png" />
                </figure>
                <p style="color: rgb(248, 248, 248)">{{ auth()->user()->name ?? auth()->user()->username }}</p>
                <div class="options__menu">
                    <nav id="ArielPlaza_s">
                        <ul class="lista ocultar">
                            <li>
                                <i title="Portafolio"></i>
                                <img src="./images/template/casa.svg" style="width:18%" srcset="" />Inicio  
                            </li>
                            <i>
                                <a href="index-usuario.blade.php">
                                    <i title="Portafolio"></i>
                                    <img src="./images/template/casa.svg" style="width:18%" srcset=""/>Personal UAI
                                </a>
                                </li>

                            <li>
                                <i title="Portafolio"></i>
                                <img src="./images/template/casa.svg" style="width:18%" srcset="" />Informe
                            </li>
                            
                          
                            <a href="{{ route('sign.logout') }}">
                                <button style="color:white; background-color: #006af5" class="btn">cerrar
                                    sesion</button>
                            </a>
                            </li>
                            <ul style="--cantidad-items: 4"></ul>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </aside>

    @yield('content')

    <!-- Bootstrap-->
    <script type="module" src="/js/bootstrap/bootstrap.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>


    <!-- Custom JS -->
    <script src="/js/template/script.js"></script>
</body>

</html>
