<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

<!--Fonte do google-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">  
<!--cssbootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


      <link rel="stylesheet" href="/css/styles.css">
      <script src="/js/scripts.js"></script>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    {{--Quer dizer que o conteudo vem a partir daqui --}}
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <!-- <a href="/" class="navbar-brand">
                   <img src="/img/" alt="">
                </a> -->
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/events/create" class="nav-link">Criar evento</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/" class="nav-link">Entrar</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/" class="nav-link">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
 
   <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg">{{ session('msg')}}</p>
                @endif
                @yield('content')
            </div>
        </div>
   </main>
    <footer>
        <p>Casas de eventos &copy; 2024</p>
    </fotter>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
