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
  <link rel="stylesheet" href="/css/estilos.css" />
  <link rel="stylesheet" href="/css/all.min.css" />

  {{-- links bootstrap --}}
  <link rel="stylesheet" href="/css/bootstrap.min.css"  />
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
    <div class="icon__menu">
      <i id="btn_open">
        <img src="/images/almuadilla.svg" alt="" srcset=""></i>
    </div>
    <br>
    <br>
    <div class="conteiner">
      <img class="img" src="/images/Cantv.png">
    </div>
  </header>

  {{-- sidebar --}}
  <aside class="menu__side" id="menu_side">
    <div class="name__page">
      <i class="fab fa-youtube"></i>
      <h4>Unidad de Auditoria Interna </h4>
    </div>
    <div class="options__menu">	
      <nav id="ArielPlaza_s">
        <ul class="lista ocultar">
          <br>
          <br>
          <br>
          <li>
            <a href="">
              <i class="fas fa-home" title="Portafolio"></i>Inicio
            </a>
            <ul style="--cantidad-items: 4"></ul>
          </li>
          <li>
            <a href="carga_datos.html">
            <i class="far fa-file" title="Portafolio"></i>Carga de data
            </a>
            <ul style="--cantidad-items: 4"></ul>
          </li>
          <li>
            <a href="#">
              <i class="far fa-file" title="Portafolio"></i>Personal UAI
            </a>
            <ul style="--cantidad-items: 4"></ul>
          </li>
          <li>
            <a href="index.html">
              <i class="far fa-file" title="Portafolio"></i>Acta
            </a>
            <ul style="--cantidad-items: 4">
              <li>
                <a href="Ver_Acta.html">Ver Acta </a>
              </li>
              <li>
                <a href="Modificar.html">Modificar</a>
              </li>
              <li>
                <a href="Informe">Informe</a>
              </li>
              <li>
                <a href="Subir_informe.html">Subir informe </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </aside>
  @yield('content')



  












  {{-- section --}}
  {{-- nav --}}
  {{-- footer --}}

  
  <!-- Tailwind-css-->
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

  <!-- Bootstrap-->
  <script type="module" src="/js/bootstrap/bootstrap.js"></script>
  <script src="/js/bootstrap/bootstrap.bundle.min.js" >
  </script>

  <!-- jQuery -->
  <script src="/js/jquery-dataTables/jquery.min.js"></script>

  <!-- DataTable -->
  <script src="/js/jquery-dataTables/jquery.dataTables.min.js"></script>
  <script src="/js/jquery-dataTables/dataTables.bootstrap5.min.js"></script>

  <!-- Custom JS -->
  <script src="/js/script.js"></script>
  <script src="/js/main.js"></script>
</body>

</html>