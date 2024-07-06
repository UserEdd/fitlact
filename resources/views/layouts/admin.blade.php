<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Meta etiquetas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> @yield('title') </title>

    <!-- Favicon --> 
    <link rel="shortcut icon" href="{{url('/assets/img/vaca.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{url('/assets/img/vaca.png')}}">

    <!-- Fonts, Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Archivos CSS -->
    <link rel="stylesheet" href="{{url('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/templatemo.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/styles.css')}}">

    @yield('estilos_unicos')

    <style>
        h1,
        h2, 
        h3, 
        p,
        label{
            color: #444; 
        }

        .btn{
            background-color: rgb(78, 107, 224);
            color: white;
            transition: color background-color 0.5s ease !important;
        }
        .btn:hover{
            color: white !important;
            background-color: rgb(40, 77, 222);
        }

        .form-group{
            margin-bottom: 1.2rem;
        }

        .btn-b{
            border: none;
            outline: none; 
            text-decoration: none;
            padding: 5px;
            line-height:initial;
        }
    </style>

    
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow ">
        <div class="container d-flex justify-content-between align-items-center ">

            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <div class="logo__img">
                    <img src="{{asset('assets/img/vaca.png')}}" alt="">
                </div>
                <div class="logo__text">
                <p>
                        <span>Fit</span><span class="c-blue">Lact</span>
                </p>
                </div>
            </a>

            <!-- Botón Menú Móvil -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Enlaces de navegación -->
            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('inicio_admin.index')}}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('users') }}">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('productos.index')}}">Alimentos</a>
                        </li>

                        <li class="nav-item dropdown">
                            @if(auth()->check()) <!-- Verifica si el usuario ha iniciado sesión -->
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-fw fa-user text-dark mr-3"></i>
                                    {{ auth()->user()->name }} <!-- Muestra el nombre del usuario -->
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <!-- Ruta para cerrar sesión -->
                                    <a class="dropdown-item" href="{{ route('login.destroy') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Cerrar sesión
                                    </a>
                        
                                    <form id="logout-form" action="{{ route('login.destroy') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            @endif
                        </li>
                        
                        
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->

    @yield('content')

    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 border-bottom pb-3 border-light logo">
                        <span class="c-white">Fit</span><span class="c-blue">Lact</span>
                    </h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        Contáctanos...
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            ...
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">+52 670 056 4323</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">fitlact@company.com</a>
                        </li>
                    </ul>
                </div>

               <!--  <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Productos</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Luxury</a></li>
                        <li><a class="text-decoration-none" href="#">Sport Wear</a></li>
                        <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Popular Dress</a></li>
                        <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>
                        <li><a class="text-decoration-none" href="#">Sport Shoes</a></li>
                    </ul>
                </div> -->

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Más información</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Inicio</a></li>
                        <li><a class="text-decoration-none" href="#">Nosotros</a></li>
                        <li><a class="text-decoration-none" href="#">Ubicacion</a></li>
                        <li><a class="text-decoration-none" href="#">Preguntas frecuentes</a></li>
                        <li><a class="text-decoration-none" href="#">Contacto</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">

                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div> -->
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light" style="text-align: center;">
                            Copyright &copy; 2024 FitLact 
                            | Diseñado por alumnos de <a rel="sponsored" href="http://www.utselva.edu.mx/" target="_blank">UTSelva</a> en colaboración con <a href="https://alpura.com/" target="_blank"><strong>Alpura</strong></a>. 

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Scripts -->
    <script src="{{url('/assets/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{url('/assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{url('/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('/assets/js/templatemo.js')}}"></script>
    
    @yield('scripts_unicos')
</body>
</html>