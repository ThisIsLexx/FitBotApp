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
        <div class="container">
            <br>
            <h1 class="subtitulo text-resaltar">¿Qué son los splits?</h1>
            <hr>
            <p style="text-align: justify;">Los splits son una metodología de entrenamiento que consiste principalmente en trabajar uno o dos
                grupos musculares durante cada sesión de entrenamiento. 
            </p>
        </div>
        <div class="container">

            
            <div class="row sombraHover" style="background-color: #EDFFEF">
                <div class="col" style="display: flex; align-items: center; justify-content: center;">
                    <img src="assets/img/splits/ppl.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col">
                    <h3 class="subtitulo2 text-resaltar" style="text-align: justify;">Split PPL</h3>
                    <p style="text-align: justify;">El split PPL, toma como tal su nombre por las siglas Push, Pull, Leg, y sigue un orden
                        de entrenamiento como su nombre lo menciona. Se trata del split de entrenamientos más
                        utilizados por personas que entrenan regularmente.
                    </p>
                    <p style="text-align: justify;">
                        Este split normalmente se utiliza de la siguiente manera: <br>
                        Lunes - Se entrenan Pectorales, Triceps y Deltoides. <br>
                        Martes - Se entrena Espalda, Biceps y puede agregarse abdomen. <br>
                        Miercoles - Se entrenan los musculos de la pierna, incluyendo Cuadriceps e Isquiotibiales. <br>
                        Jueves - Se repite la secuencia de entrenamiento del día Lunes. <br>
                        Viernes - Se repite la secuencia de entrenamiento del día Martes. <br>
                        Sabado - Se repite la secuencia de entrenamiento del día Miercoles. <br>
                    </p>
                </div>
            </div>
            <hr>
            <div class="row sombraHover">
                <div class="col">
                    <h3 class="subtitulo2 text-resaltar" style="text-align: justify;">Split Arnold</h3>
                    <p style="text-align: justify;">El split Arnold hace referencia a su metodología de entrenamiento siguiendo la organización
                        semanal del fisicoculturista Arnold, esta metodología no es tan común, puesto que en ella se
                        exhaustan los musculos grandes en un solo día, dando espacio a trabajar los musculos pequeños 
                        como lo son el Biceps o Triceps de manera más eficiente.
                    </p>
                    <p style="text-align: justify;">
                        Este split normalmente se utiliza de la siguiente manera: <br>
                        Lunes - Se entrenan pectorales, y espalda. <br>
                        Martes - Se entrenan los tres grupos musculares pequeños, triceps, biceps y deltoides. <br>
                        Miercoles - Se entrenan los musculos de la pierna, incluyendo Cuadriceps e Isquiotibiales. <br>
                        Jueves - Se repite la secuencia de entrenamiento del día lunes. <br>
                        Viernes - Se repite la secuencia de entrenamiento del día martes. <br>
                        Sabado - Se repite la secuencia de entrenamiento del día miercoles. <br>
                    </p>
                </div>
                <div class="col" style="display: flex; align-items: center; justify-content: center;">
                    <img src="assets/img/splits/arnold.jpg" class="img-fluid" alt="Responsive image">
                </div>
            </div>
            <hr>
            <div class="row sombraHover" style="background-color: #EDFFEF">
                <div class="col" style="display: flex; align-items: center; justify-content: center;">
                    <img src="assets/img/splits/mix.jpg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col">
                    <h3 class="subtitulo2 text-resaltar" style="text-align: justify;">Split mixto</h3>
                    <p style="text-align: justify;">El split mixto toma ambas metodologías mencionadas anteriormente para combinarlas en
                        una semana de entrenamientos más completa y exigente. Este metodo de organización es más
                        recomendable para aquellos deportistas que ya tienen tiempo entrenando.
                    </p>
                    <p style="text-align: justify;">
                        Este split normalmente se utiliza de la siguiente manera: <br>
                        Lunes - Se entrenan Pectorales, Triceps y Deltoides. <br>
                        Martes - Se entrenan la Espalda y el Biceps. <br>
                        Miercoles - Se entrenan los musculos de la pierna, incluyendo Cuadriceps e Isquiotibiales. <br>
                        Jueves - Se entrenan Pectorales, y Espalda. <br>
                        Viernes - Se entrenan los tres grupos musculares pequeños. <br>
                        Sabado - Se repite la secuencia de entrenamiento del día miercoles. <br>
                    </p>
                </div>
            </div>
            <hr>
        </div>
        <div style=" margin: 10px; position: fixed; bottom:0px; right:0px;">
            <form action="/Ajustes" method="GET">
                <input type="submit" value="Volver a los Ajustes" class="btn btn-success">
            </form>
        </div>
    </div>
    

    <script src="{{asset('https://code.jquery.com/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>