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
        <nav class="navbar navbar-expand-lg navbar-dark bg-black justify-content-between">
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
                        <a href="/" class="nav-link text-success">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="/EntrenadorVirtual" class="nav-link">Entrenador Virtual</a>
                    </li>
                    <li class="nav-item">
                        <a href="/Ejercicios" class="nav-link">Funciones</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <section class="LandingBG">
        <div class="contenedorLanding">
            <h1 class="text-uppercase font-weight-bold font-italic titulo text-light">Consigue tu físico <br><span>deseado con <span class="text-resaltar">Fit-Bot</span></span></h1>
            <p><div class="separador"></div></p>
            <p class="text-light subtitulo">Con ayuda del servicio de asistente virtual que <span class="text-resaltar">Fit-Bot</span> ofrece, puedes consultar diferentes funcionalidades, 
                                                        como información sobre la ejecución de los ejercicios.</p>
            <p class="text-resaltar subtitulo2">¿Porqué elegirnos?</p>
            <p class="text-light subtitulo2">En Lets-Fit ofrecer una buena experiencia a nuestros deportistas es una prioridad, por esto, nuestro servicio FIT-BOT
                                            cuenta con diversas funciones:</p>
            <div class="ofertas">
                <p class="text-resaltar subtitulo2">Calculadora IMC - <span class="text-light">FIT-BOT te ayudará a mantenerte al tanto sobre tus avances en tu indice de masa corporal.</span></p>
                <p class="text-resaltar subtitulo2">Ejecución de ejercicios - <span class="text-light">FIT-BOT puede instruirte en la ejecución de los ejercicios para tu rutina.</span></p>
                <p class="text-resaltar subtitulo2">Registro de avances - <span class="text-light">FIT-BOT te permite almacenar todos tus avances dentro de su apartado de funciones. </span></p>
                <p class="text-resaltar subtitulo2">Recomendación de rutinas - <span class="text-light">FIT-BOT  te proporcionará rutinas de entrenamiento tomando en cuenta los contenidos que hayas valorado positivamente</span></p>
            </div>
        </div>
        <div class="derechos">
            <p class="text-light">Todos los derechos reservados - Lets-Fit © 2023</p>
        </div>
        
        
    </section>

    <script src="{{asset('https://code.jquery.com/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>