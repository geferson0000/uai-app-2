<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>@yield('title')</title>
  {{-- styles --}}

  {{-- para pasar los arhivos css y js a la carpeta resource tienes que tener instalado vite js --}}

  {{-- links styles --}}
  <link rel="stylesheet" href="/css/app.css" />
  <link rel="stylesheet" href="/css/styles.css" />
  <link rel="stylesheet" href="/css/estilos.css" />
  <link rel="stylesheet" href="/css/all.min.css" />

  {{-- links bootstrap --}}
  <link rel="stylesheet" href="/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/css/dataTables.bootstrap5.min.css" />

  {{-- links logo --}}
  <link rel="icon" href="/images/logos.png" type="image/png">
  <link rel="icon" href="/images/logo-removebg-preview.ico" type="image/png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

</head>

<style>
  body>section {
    background-image: url('https://cantvuaiproyectosap.000webhostapp.com/img/fondo.png');
  }

  #div1 {
    border-radius: 2rem;
  }

  #div2 {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column
  }

  #button3 {
    margin-top: 2vh;
    width: 10vw;
    display: flex;
    justify-content: center;
  }

  form {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }

</style>

<body>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-30 col-md-8 col-lg-6 col-xl-5">
          
          <div id="div1" class="card shadow-2-strong">
            <div class="card-header" style="display:flex; justify-content:center">
              <img src="images/logo-.png" width="200px">
            </div>
            <div id="div2" class="card-body ">
              <form method="POST" action="{{ route('sign.login.authenticate') }}">
                @csrf
                @method('post')

                <div class="row mb-3">
                  <label for="email" class="col-md-4 col-form-label text-md-end">
                    {{ __('Usuario ') }}
                  </label>
                  <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                      name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                      <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                  <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                      name="password" required autocomplete="current-password">

                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                      <label class="form-check-label" for="remember">
                        {{ __('Recordarme') }}
                      </label>
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary" style="background-color: red">
                  {{ __('Iniciar Sesión') }}
                </button>

                @if (Route::has('password.request'))
                  <a class="btn btn-link" href="">
                    {{ __('¿Olvidaste tu contraseña?') }}
                  </a>
                @endif

              </form>

              <button id="button3" class="btn btn-primary">
                <a href="{{ route('sign.register') }}">{{ __('Registr') }}</a>
              </button>

            </div>
          </div>

        </div>
  </section>
  <!-- Section: Design Block -->

  <script type="module" src="/js/bootstrap/bootstrap.js"></script>
  <script src="/js/bootstrap/bootstrap.bundle.min.js"></script>

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
