@extends('layouts.app')
@section('title', 'FitLact - Servicios')

<!-- Estilos únicos -->
@section('content')
    <!-- Start Section -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Nuestros Servicios</h1>
                <p>
                    Con el objetivo de garantizar la calidad de la aplicación y la satisfacción de nuestros usuarios, ofrecemos...
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 c-blue text-center"><i class="fa-solid fa-cow"></i></div>
                    <h2 class="h5 mt-4 text-center">Ofertas En Productos Lácteos</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 c-blue text-center"><i class="fa-solid fa-mobile"></i></div>
                    <h2 class="h5 mt-4 text-center">Seguimiento Diario</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 c-blue text-center"><i class="fa-solid fa-utensils"></i></div>
                    <h2 class="h5 mt-4 text-center">Plan Nutrimental Personalizado</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 c-blue text-center"><i class="fa fa-user"></i></div>
                    <h2 class="h5 mt-4 text-center">24 Horas De Servicio</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->
@endsection
