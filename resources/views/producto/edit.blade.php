@extends('layouts.admin')
@section('title', 'FitLact - Modificar')

<!-- Estilos únicos -->
@section('content')
    <script src="{{asset('assets/scripvali/validacion.js')}}"></script>
    <!-- Start Section -->
    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="display-4 text-center mb-4">Editar Producto</h1>
                <form method="POST" action="{{ route('productos.update', $producto) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $producto->nombre }}" required>
                            </div>
                            <div class="form-group">
                                <label for="carbohidratos" class="form-label">Carbohidratos:</label>
                                <input type="text" id="carbohidratos" name="carbohidratos" class="form-control" value="{{ $producto->carbohidratos }}" required>
                            </div>
                            <div class="form-group">
                                <label for="proteinas" class="form-label">Proteinas:</label>
                                <input type="text" id="proteinas" name="proteinas" class="form-control" value="{{ $producto->proteinas }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="imagen" class="form-label">Imagen:</label>
                                <input type="file" id="imagen" name="imagen" class="form-control-file">
                                @if($producto->imagen)
                                    <div class="mt-2">
                                        <img src="{{ asset($producto->imagen) }}" alt="Imagen actual" style="max-width: 100px;">
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="grasas" class="form-label">Grasas:</label>
                                <input type="text" id="grasas" name="grasas" class="form-control" value="{{ $producto->grasas }}" required>
                            </div>
                            <div class="form-group">
                                <label for="calorias" class="form-label">Calorías:</label>
                                <input type="text" id="calorias" name="calorias" class="form-control" value="{{ $producto->calorias }}" required>
                            </div>
                            <div class="form-group">
                                <label for="contenido" class="form-label">Contenido:</label>
                                <input type="text" id="contenido" name="contenido" class="form-control" value="{{ $producto->contenido }}" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-4">Actualizar Producto</button>
                </form>
            </div>
        </div>
    </section>
@endsection
