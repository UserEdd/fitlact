
@extends('layouts.admin')
@section('title', 'FitLact - Productos')

<!-- Estilos únicos -->

@section('content')

    <!-- Start Section -->
    <section class="container py-5">
        <div class="text-right mb-3">
            <a href="{{ route('productos.create') }}" class="btn bg-blue c-white btn">Agregar Nuevo Producto</a>
        </div>
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mb-3"><strong>Alimentos</strong></h1>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                        <button class="btn btn-sm" onclick="this.parentNode.remove()">X</button>
                    </div>
                @endif
    
                @if(session('alert'))
                    <div class="alert alert-danger">
                        {{ session('alert') }}
                        <button class="btn btn-sm" onclick="this.parentNode.remove()">X</button>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Carbohidratos</th>
                                <th>Proteinas</th>
                                <th>Grasas</th>
                                <th>Calorías</th>
                                <th>Contenido</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                            <tr>
                                <td>
                                    <img src="{{ $producto->imagen ? asset($producto->imagen) : asset('assets/image/ali.jpg') }}" alt="imagen" class="img-fluid" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,.2);">
                                </td>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->carbohidratos }}</td>
                                <td>{{ $producto->proteinas }}</td>
                                <td>{{ $producto->grasas }}</td>
                                <td>{{ $producto->calorias }}</td>
                                <td>{{ $producto->contenido }}</td>
                                <td>
                                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn-b btn-primary btn-sm">Editar</a>
                                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-b btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    
    <!-- End Section -->


@endsection
