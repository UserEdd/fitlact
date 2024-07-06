@extends('layouts.app')
@section('title', 'FitLact - Inicio')

<!-- Estilos únicos -->

@section('content')

    <!-- Start Banner Hero -->
    <div class="carousel slide" data-bs-ride="carousel"> <!-- id="template-mo-zay-hero-carousel" -->
        <!-- <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol> -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">

                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 color-yellow">Fit<span class="c-blue">Lact</span></h1>
                                <h3 class="h2">Crea tus planes nutricionales y lleva el control de tu dieta. </h3>
                                <p>
                                    Conoce los distintos productos lácteos y agregalos a tus comidas. Aplicación patrocinada por <a href="https://alpura.com/" target="_blank"><strong>Alpura</strong></a>. 
                                </p>

                                <div class="d-flex justify-content-center my-5">
                                    <a href="{{route('empezar.index')}}" class="btn-start bg-blue-h">Empezar Ahora!</a>
                                </div>

                                <div class="d-flex justify-content-center my-5">
                                    <a class="col-5 mx-1" href="#">
                                        <img src="assets/img/google-play.png" alt="" class="h-100">
                                    </a>

                                    <a class="col-5 mx-1" href="#">
                                        <img src="assets/img/app-store.png" alt="" class="h-100">
                                    </a>                                
                                </div>
                            </div>
                        </div>
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="./assets/img/nutrition-4.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_02.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Proident occaecat</h1>
                                <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                                <p>
                                    You are permitted to use this Zay CSS template for your commercial websites. 
                                    You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_03.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Repr in voluptate</h1>
                                <h3 class="h2">Ullamco laboris nisi ut </h3>
                                <p>
                                    We bring you 100% free CSS templates for your websites. 
                                    If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a> -->
    </div>
    <!-- End Banner Hero -->

    <!-- Start Categories of The Month -->
    <section class="py-5 px-3 bg-light">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">¿Que Ofrecemos?</h1>
                <p>
                    Nuestra aplicación te proporcionará los requerimientos nutricionales necesarios en base a tus caracteristicas físicas. 
                </p>
            </div>
        </div>
        <div class="row container-items">
            <div class="col-12 col-md-4 p-5 mt-3">
                <div class="container__img">
                    <img src="assets/img/aptitud-fisica.png" alt="">
                </div>
                <h5 class="text-center mt-3 mb-3">Te Ayudamos A Alcanzar Tus Objetivos Físicos</h5>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <div class="container__img">
                    <img src="assets/img/dieta.png" alt="">
                </div>
                <h2 class="h5 text-center mt-3 mb-3">Organiza Tu Dieta Y Mantente Informado De Ella.</h2>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <div class="container__img">
                    <img src="assets/img/productos-lacteos.png" alt="">
                </div>
                <h2 class="h5 text-center mt-3 mb-3">Ofrecemos Descuentos En Productos Lácteos Saludables</h2>
                <!-- <p class="text-center"><a class="btn btn-success">Go Shop</a></p> -->
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-10 m-auto">
                <h1 class="h1">Recuerda combinar tu dieta con ejercicios adecuados...</h1>
                <p>La alimentación, el ejercicio y el descanso adecuado van de la mano :)</p>
                <img src="assets/img/alimentacion saludable.gif" alt="">

                <p>
                    Recuerda...
                    <blockquote>
                        <strong>"Si tienes tiempo de sentir pena por ti mismo, tienes tiempo para mejorarte." </strong>
                        <br>
                        <cite>- Saitama</cite>
                    </blockquote>
                </p>
            </div>
        </div>
    </section>
    
    <!-- End Categories of The Month -->

    <!-- Start Featured Product -->
    <!-- <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/feature_prod_01.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$240.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Gym Weight</a>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia deserunt.
                            </p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/feature_prod_02.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$480.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Cloud Nike Shoes</a>
                            <p class="card-text">
                                Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.
                            </p>
                            <p class="text-muted">Reviews (48)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/feature_prod_03.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$360.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Summer Addides Shoes</a>
                            <p class="card-text">
                                Curabitur ac mi sit amet diam luctus porta. Phasellus pulvinar sagittis diam, et scelerisque ipsum lobortis nec.
                            </p>
                            <p class="text-muted">Reviews (74)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Featured Product -->
@endsection

