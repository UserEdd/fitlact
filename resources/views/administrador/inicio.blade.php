@extends('layouts.admin')
@section('title', 'FitLact - Administrador')

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
                                <h3 class="h2">Bienvenido a la interfaz de Administrador. </h3><br>
                                <p>
                                  Desde esta interfaz podrás gestionar los datos ligados a la aplicación web, como alimentos y usuarios, así como también ver el tráfico de datos y gráficas relacionadas. 
                                </p>

     
                            </div>
                        </div>
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="./assets/img/admin.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->
@endsection

