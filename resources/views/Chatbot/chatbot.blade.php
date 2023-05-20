<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LetsFit</title>
    
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/styles.css')}}"> -->
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#chat-form').on('submit', function(e) {
                e.preventDefault();
                var message = $('#message').val();
                sendMessage(message);
            });

            function sendMessage(message) {
            var token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: '/EntrenadorVirtual',
                method: 'POST',
                data: {
                    message: message,
                    _token: token
                },
                dataType: 'json',
                success: function(response) {
                    handleResponse(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
}

            function handleResponse(response) {
                var chatbox = $('#chatbox');
                chatbox.append('<div class="separador"></div><div class="mensajeUsuario"><p>' + response.userMessage + '</p>' + '<div class="mensajeHora">' + "<span class='font-italic' style='font-size: 15px;'>" + response.hora + '</span></div></div>');

                setTimeout(function() {
                    chatbox.append('<div class="separador"></div><div class="mensajeBot"><p>' + response.response + '</p>' + '<div class="mensajeHora">' + "<span class='font-italic' style='font-size: 15px;'>" + response.hora + '</span></div></div>');
                }, 500); // Espera de 500 milisegundos (0.5 segundos)

                $('#message').val('');
                
                // Ajustar la posición de desplazamiento hacia abajo
                setTimeout(function() {
                    chatbox.scrollTop(chatbox.prop("scrollHeight"));
                }, 1);
            }
        });
    </script>

</head>
    <body style="background: linear-gradient(90deg, rgba(106,145,19,0.1) 0%, rgba(20,21,23,0.1) 100%);">
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
                            <a href="/EntrenadorVirtual" class="nav-link text-success">Entrenador Virtual</a>
                        </li>
                        <li class="nav-item">
                            <a href="/Ejercicios" class="nav-link">Funciones</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <br>
        
        <div class="container" style="display: flex; justify-content: center; align-items: center;">
                <div class="container">
                    <div class="container sombra-hover overflowDiv">
                        <div id="chatbox" style="display: flex; flex-direction: column;">
                            <div class="mensajeBot border rounded">
                                <p>
                                    Hola! Mi nombre es Fitbot. Soy un asistente virtual creado por la empresa LetsFit<br>
                                    para asistirte durante tu estancia en nuestra pagina web. <br><br> Para comenzar, porfavor escribe la palabra hola.
                                </p>
                                <div class="mensajeHora">
                                    <span class="font-italic" style="font-size: 15px;">
                                        {{now()->format('h:i')}}
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <hr>    
                    <form id="chat-form" action="/EntrenadorVirtual" method="POST" class="form-inline align-items-center">
                        @csrf
                        <input type="text" name="message" id="message" placeholder="Escribe un mensaje" class="form-control" style="width: 80%" required>
                        <button type="submit" class="btn btn-success">Enviar Mensaje</button>
                    </form>
                </div>
        </div>
        
        <script src="{{asset('https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
