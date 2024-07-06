@extends('layouts.admin')
@section('content')
    <!-- Start Section -->
    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="display-4 text-center mb-4">Editar Usuario</h1>
                <form method="POST" action="{{ route('users.update', $user->id) }}" class="row g-3" enctype="multipart/form-data" id="editUserForm">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" id="apellidos" name="apellidos" class="form-control" value="{{ $user->apellidos }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
                        @error('email')
                        <p class="text-danger">{{ "Use otro correo" }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="tipo" class="form-label">Tipo:</label>
                        <select name="tipo" id="tipo" class="form-select">
                            <option value="cliente" {{ $user->tipo == 'cliente' ? 'selected' : '' }}>Cliente</option>
                            <option value="administrador" {{ $user->tipo == 'administrador' ? 'selected' : '' }}>Administrador</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block mt-4">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Section -->

    <script src="{{ asset('assets/scripvali/form-validation.js') }}"></script>

@endsection
