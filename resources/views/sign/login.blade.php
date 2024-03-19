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
    <link rel="stylesheet" href="/css/bootstrap.min.css"  />
    <link rel="stylesheet" href="/css/dataTables.bootstrap5.min.css" />
  
    {{-- links logo --}}
    <link rel="icon" href="/images/logos.png" type="image/png">
    <link rel="icon" href="/images/logo-removebg-preview.ico" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div class="container" style="margin-top: 10vh">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Iniciar Sesión') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{route('sign.login.authenticate')}}">
                            @csrf
                            @method('post')
    
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo electrónico') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
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
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Recordarme') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary" style="background-color: #13b">
                                        {{ __('Iniciar Sesión') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="">
                                            {{ __('¿Olvidaste tu contraseña?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                        <a href="{{route('sign.register')}}">
                            <button class="btn btn-primary">Registrarse</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
