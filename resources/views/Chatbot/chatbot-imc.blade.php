<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LetsFit</title>

    <!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/styles.css')}}"> -->

    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
</head>
    <body>
        <div class="sticky-top">
            <nav class="navbar navbar-expand-lg navbar-dark bg-black justify-content-between" style="filter: drop-shadow(0px -2px 10px #000);">
                    <a class="navbar-brand text-light" href="/">
                    <img src="" width="70" height="auto" class="d-inline-block align-top" alt="">
                        Lets Fit!
                    </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="/EntrenadorVirtual" class="nav-link text-success">Entrenador Virtual</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Registrarte</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="wrapper">
            <!-- Sidebar -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h5 class="text-light">Menú de funciones</h5>
                </div>
        
                <ul class="list-unstyled components">
                    <li>
                        <a href="/EntrenadorVirtual">Fit-Bot</a>
                    </li>
                    <li>
                        <a href="/CalculadoraIMC" style="color: #ffffff; background: #a3c2a6;">Calculadora IMC</a>
                    </li>
                    <li>
                        <a href="/Ejercicios">Info. Ejercicios</a>
                    </li>
                    <li>
                        <a href="/Avances">Avances personales</a>
                    </li>
                </ul>
                <ul class="list-unstyled components">
                    <li>
                        <a href="/Ajustes">Ajustes</a>
                    </li>
                </ul>
            </nav>
            <div class="container" style="padding: 20px;">
                <p class="text-left">Ingrese cada uno de los campos requeridos para poder calcular su indice de masa corporal.</p>
                
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}
                    </div>
                @endif
                
                @error('edad')
                    <div class="alert alert-danger">
                        Parece que algunos campos tienen errores! Revisa cuales son y vuelve a ingresar valores
                    </div>
                @enderror

                <div class="container border rounded sombraHover" style="padding: 20px;">
                    <form action="/IMC" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-12 col-md-9 col-sm-12">
                                <label for="edad">Edad</label>
                                <input type="numeric" name="edad" id="edad" class="@error('edad') is-invalid @enderror form-control" placeholder="17..." value="{{old('edad')}}">
                                @error('edad')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Insertar una edad mayor a 0
                                </small>
    
                                <label for="estatura">Estatura</label>
                                <input type="text" name="estatura" id="estatura" class="@error('edad') is-invalid @enderror form-control" placeholder="182" value="{{old('estatura')}}">
                                @error('estatura')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    La estatura debe ser representada en centimetros, por ejemplo, si mides 1 metro con 70 centimetros, entonces deberás ingresar 170
                                </small>             
                            
                                <label for="peso">Peso</label>
                                <input type="text" name="peso" id="peso" class="@error('edad') is-invalid @enderror form-control" placeholder="66.3" value="{{old('peso')}}">
                                @error('peso')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    El peso deberá ser insertado en kilogramos, y de ser necesario, utilizando punto decimal.
                                </small>      
                            </div>
                            <div class="col">
                                <div class="container wrapCentrado">
                                    <img src="assets/img/manzana.png" alt="" class="img-fluid imagenIMC">
                                    <input type="submit" value="Enviar" class="btn btn-success btn-lg centrado">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                @if(session('success'))
                    <br>
                    <h2 class="text-uppercase font-weight-bold text-resaltar">Tus resultados</h2>
                    <hr>
                    <p>Peso: {{session('peso')}} Kilogramos </p>
                    <p>Estatura: {{session('estatura')}} Centimetros </p>
                    <p>Tu <span class="text-resaltar">indice de masa corporal</span> es: <span style="font-weight: 600;">{{session('IMC')}}</span></p>
                @endif
            </div>
        </div>

        <script src="{{asset('https://code.jquery.com/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="{{asset('https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>