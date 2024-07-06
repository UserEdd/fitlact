@extends('layouts.app')
@section('title', 'FitLact - Empezar')

<style>

    .empezar-container-1{
    }

    .empezar-container-2{
        display: none;
    }

    .empezar-container-3{
        display: none;
    }


</style>

@section('content')
    <!-- Start Content Page -->
    <div class="container-fluid py-5">
        <div class="col-md-6 m-auto text-center  empezar-container-1">
            <h1 class="h1 "></h1>
            <div class="">
                <a class="back-page" href="{{route('inicio.index')}}">< Atrás</a>
                <p class="empezar-title fw-600">¿Cuál es tu objetivo?</p>
            </div>
            <div class="">
                <a class="option col-md-12 d-flex align-items-center justify-content-space-between" href="{{route('alimentacion.index')}}">
                    <div class="option-img">
                        <img src="assets/img/calorias.png" alt="">
                    </div>
                    <div class="option-text">
                        <p class="fw-600">Perder grasa</p>
                        <p>Máximiza la pérdida de grasa y conserva tu masa muscular.</p>
                    </div>
                </a>

                <a class="option col-md-12 d-flex align-items-center justify-content-space-between" href="{{route('alimentacion.index')}}">
                    <div class="option-img">
                        <img src="assets/img/equilibrio.png" alt="">
                    </div>
                    <div class="option-text">
                        <p class="fw-600">Mantener Peso</p>
                        <p>Conserva tu estado físico y mantente saludable.</p>
                    </div>
                </a>

                <a class="option col-md-12 d-flex align-items-center justify-content-space-between" href="{{route('alimentacion6.index')}}">
                    <div class="option-img">
                        <img src="assets/img/fuerte.png" alt="">
                    </div>
                    <div class="option-text">
                        <p class="fw-600">Ganar músculo</p>
                        <p>Incrementa tu masa muscular y vuélvete más fuerte.</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- <a class="col-md-6 m-auto text-center empezar-container-2 d-none" id="ec-2" href="">
            <h1 class="h1 "></h1>
            <div class="">
                <a class="back-page" href="{{route('inicio.index')}}">< Atrás</a>
                <p class="empezar-title fw-600">¿Cuál es tu objetivo?</p>
            </div>
            <div class="">
                <a class="option col-md-12 d-flex align-items-center justify-content-space-between" href="#">
                    <div class="option-img">
                        <img src="assets/img/calorias.png" alt="">
                    </div>
                    <div class="option-text">
                        <p class="fw-600">Perder grasa</p>
                        <p>Máximiza la pérdida de grasa y conserva tu masa muscular.</p>
                    </div>
                </a>

                <a class="option col-md-12 d-flex align-items-center justify-content-space-between" href="#">
                    <div class="option-img">
                        <img src="assets/img/equilibrio.png" alt="">
                    </div>
                    <div class="option-text">
                        <p class="fw-600">Mantener Peso</p>
                        <p>Conserva tu estado físico y mantente saludable.</p>
                    </div>
                </a>

                <a class="option col-md-12 d-flex align-items-center justify-content-space-between" href="#">
                    <div class="option-img">
                        <img src="assets/img/fuerte.png" alt="">
                    </div>
                    <div class="option-text">
                        <p class="fw-600">Ganar músculo</p>
                        <p>Incrementa tu masa muscular y vuélvete más fuerte.</p>
                    </div>
                </a>
            </div>
        </a>

        <a class="col-md-6 m-auto text-center  empezar-container-3">
            <h1 class="h1 "></h1>
            <div class="">
                <a class="back-page" href="{{route('inicio.index')}}">< Atrás</a>
                <p class="empezar-title fw-600">¿Cuál es tu objetivo?</p>
            </div>
            <div class="">
                <a class="option col-md-12 d-flex align-items-center justify-content-space-between" href="#">
                    <div class="option-img">
                        <img src="assets/img/calorias.png" alt="">
                    </div>
                    <div class="option-text">
                        <p class="fw-600">Perder grasa</p>
                        <p>Máximiza la pérdida de grasa y conserva tu masa muscular.</p>
                    </div>
                </a>

                <a class="option col-md-12 d-flex align-items-center justify-content-space-between" href="#">
                    <div class="option-img">
                        <img src="assets/img/equilibrio.png" alt="">
                    </div>
                    <div class="option-text">
                        <p class="fw-600">Mantener Peso</p>
                        <p>Conserva tu estado físico y mantente saludable.</p>
                    </div>
                </a>

                <a class="option col-md-12 d-flex align-items-center justify-content-space-between" href="#">
                    <div class="option-img">
                        <img src="assets/img/fuerte.png" alt="">
                    </div>
                    <div class="option-text">
                        <p class="fw-600">Ganar músculo</p>
                        <p>Incrementa tu masa muscular y vuélvete más fuerte.</p>
                    </div>
                </a>
            </div>
        </a> -->
    </div>
@endsection
