@extends('layouts.admin')

@section('content')
    <!-- Start Section -->
    <section class="container py-5">
        <h1>Crear Usuario</h1>

        <form action="{{ route('users.store') }}" method="post" id="userForm">
            @csrf
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control" value="{{ old('apellidos') }}" required>
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-danger">{{ "Correo repetido" }}</p>
                    @enderror
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <select name="tipo" id="tipo" class="form-control">
                    <option value="cliente">Cliente</option>
                    <option value="administrador">Administrador</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </section>
    <!-- End Section -->

    <script src="{{ asset('assets/scripvali/form-validation.js') }}"></script>
@endsection
