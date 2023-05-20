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
                    <h5 class="text-light">Menú de funciones</h5>
                </div>
        
                <ul class="list-unstyled components">
                    <li>
                        <a href="/EntrenadorVirtual"><img src="assets/img/entrenador.png" class="" style="width: 30px"> - Fit-Bot</a>
                    </li>
                    <li>
                        <a href="/CalculadoraIMC"><img src="assets/img/imc.png" class="" style="width: 30px"> - Calculadora IMC</a>
                    </li>
                    <li>
                        <a href="/Ejercicios"><img src="assets/img/ejercicio.png" class="" style="width: 30px"> - Info. Ejercicios</a>
                    </li>
                    <li>
                        <a href="/Avances"><img src="assets/img/metrica.png" class="" style="width: 30px"> - Avances personales</a>
                    </li>
                </ul>
                <ul class="list-unstyled components">
                    <li>
                        <a href="/Ajustes" style="color: #ffffff; background: #a3c2a6;"><img src="assets/img/ajustes.png" class="" style="width: 30px"> - Ajustes</a>
                    </li>
                </ul>
            </nav>
            <div class="container" style="padding: 20px;">
                <p style="text-align: justify;">
                    Bienvenido a la ventana de ajustes. Dentro de este apartado, puedes configurar tus preferencias
                    sobre la metodologia de ejercicios que planeas utilizar. Si deseas obtener información acerca de
                    las opciones configurables, has click en el botón de ayuda que se encuentra en la parte inferior derecha
                    de la pantalla.
                </p>
                <hr>
                <div class="container border rounded sombraHover" style="padding: 20px;">
                    <form action="">
                        @csrf
                        <div class="form-group">
                            <label for="nombreBot">Nombre del asistente virtual</label>
                            <input type="text" class="form-control" value="FitBot">
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Puedes ingresar un nombre a tu gusto si deseas llamar de otra manera a Fitbot, estos cambios
                                solo se veran afectados solo para tu cuenta.
                            </small>
                            <hr>
                            <div class="form-check">
                                <input type="radio" value="PPL" id="split-1" name="split" class="form-check-input" checked>
                                <label for="split-1" class="form-check-label">Split PPL</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" value="ARNOLD" name="split" class="form-check-input">
                                <label for="split-2" class="form-check-label">Split ARNOLD</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" value="MIX" name="split" class="form-check-input">
                                <label for="split-2" class="form-check-label">Split MIXTO</label>
                            </div>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                El split seleccionado cambiara la forma en la que interactua el asistente virtual con respecto a sus respuestas dadas.
                            </small>
                        </div>
                        <hr>
                        <input type="submit" value="Guardar cambios" class="btn btn-success">
                    </form>
                </div>
            </div>
            <div style=" margin: 10px; position: fixed; bottom:0px; right:0px;">
                <form action="/informacionSplits" method="GET">
                    <input type="submit" value="Ayuda sobre los split" class="btn btn-success">
                </form>
            </div>
        </div>

        <script src="{{asset('https://code.jquery.com/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="{{asset('https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>