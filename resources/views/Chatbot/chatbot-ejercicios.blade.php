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
                    <img src="assets/img/logo.png" width="30" height="auto" class="d-inline-block align-top" alt="">
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
                            <a href="/EntrenadorVirtual" class="nav-link">Entrenador Virtual</a>
                        </li>
                        <li class="nav-item">
                            <a href="/Ejercicios" class="nav-link text-success">Funciones</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="wrapper">
            <!-- Sidebar -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h5 class="text-light center">Menú de funciones</h5>
                </div>
        
                <ul class="list-unstyled components">
                    <li>
                        <a href="/EntrenadorVirtual"><img src="assets/img/entrenador.png" class="" style="width: 30px"> - Fit-Bot</a>
                    </li>
                    <li>
                        <a href="/CalculadoraIMC"><img src="assets/img/imc.png" class="" style="width: 30px"> - Calculadora IMC</a>
                    </li>
                    <li>
                        <a href="/Ejercicios" style="color: #ffffff; background: #a3c2a6;"><img src="assets/img/ejercicio.png" class="" style="width: 30px"> - Info. Ejercicios</a>
                    </li>
                    <li>
                        <a href="/Avances"><img src="assets/img/metrica.png" class="" style="width: 30px"> - Avances personales</a>
                    </li>
                </ul>
                <ul class="list-unstyled components">
                    <li>
                        <a href="/Ajustes"><img src="assets/img/ajustes.png" class="" style="width: 30px"> - Ajustes</a>
                    </li>
                </ul>
            </nav>
            <div class="container overflow-auto">

                @if(sizeof($ejercicios) <= 0)
                    <div class="mensajeVacio border rounded bg-danger text-light">
                        Por el momento no existen registros sobre ejercicios!
                    </div>
                @endif

                <br><br>
                
                @if(session('filtrado'))
                    <div class="alert alert-success">
                        Se encontraron los siguientes registros:
                    </div>
                @endif

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-3 col-md-4 col-ls-4">
                            <h5 class="text-muted">Filtrado por categoria<span class="text-resaltar">{{$filter == null ? "" : " $filter"}}</span></h5>
                        </div>
                        <div class="col-sm-1 col-md-1 col-lg-3"></div>
                        <div class="col-sm-3 col-md-2 col-lg-1">
                            <a class="btn btn-link" href="/Ejercicios">X</a>
                        </div>
                        <div class="col-sm-5 col-md-4 col-lg-4">
                            <form class="group-form d-flex" action="/filtrar" method="POST">
                                @csrf
                                <input type="text" name="filter" class="form-control">
                                <input required class="btn btn-secondary" type="submit" value="Filtrar">
                            </form>
                        </div>
                    </div>
                </div>

                <hr>
                <small id="passwordHelpBlock" class="form-text text-muted">
                    Para el filtrado, puedes ingresar cualquiera de las siguientes categorias: hombro, pecho, triceps, biceps, pierna, espalda
                </small>
                <div class="overflowDiv">
                    @foreach($ejercicios as $ejercicio)
                        <div class="card-body border rounded sombraHover">
                            <h5 class="card-title">{{$ejercicio->nombreEjercicio}} - {{$ejercicio->calificacion}} - {{$ejercicio->categoriaEjercicio}}</h5>
                            <div class="d-flex justify-content-between">
                                <p class="card-text">{{$ejercicio->infoEjercicio}}</p>    
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        
        <script src="{{asset('https://code.jquery.com/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="{{asset('https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>