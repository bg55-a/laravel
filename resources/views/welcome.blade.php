<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Tu código head existente... -->
    <title>Manejo integrado del Paisaje</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
      .carousel-img {
        width: 600px; /* Tamaño fijo de la imagen */
        height: 500px; /* Tamaño fijo de la imagen */
        object-fit: cover; /* Ajusta la imagen al tamaño proporcionado sin deformarla */
        margin: 0 auto; /* Centra la imagen horizontalmente */
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body class="antialiased">

    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/home') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrarse</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="text-center px-6">
            <h1 class="text-4xl font-semibold text-gray-900 dark:text-white">Bienvenido a Manejo Integrado del Paisaje
            </h1>
            <p class="mt-4 text-xl text-gray-600 dark:text-gray-400">Descubre la belleza del paisaje y aprende sobre su
                manejo sostenible.</p>

            <!-- Puedes agregar más contenido aquí, como enlaces, imágenes, etc. -->

        </div>

        <!-- Tu código del carrusel existente... -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
        
          <!-- Slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img class="carousel-img" src="https://www.scielo.org.mx/img/revistas/igeo/n91//0188-4611-igeo-91-00007-gf1.jpg" alt="Image 1">
            </div>
            <div class="item">
              <img class="carousel-img" src="https://i0.wp.com/foodandpleasure.com/wp-content/uploads/2019/01/tlax-1.jpg?fit=720%2C477&ssl=1" alt="Image 2">
            </div>
            <div class="item">
              <img class="carousel-img" src="https://i.ytimg.com/vi/ax7nqWD1K-E/maxresdefault.jpg" alt="Image 3">
            </div>
          </div>
        
          <!-- Controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>


</body>

</html>





