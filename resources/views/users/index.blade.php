@extends('layouts.admin')

@section('content')
    <!-- Start Section -->
    <section class="container py-5">
        <div class="text-right mb-3">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Crear Usuario</a>
        </div>
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mb-3"><strong>Usuarios</strong></h1>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                        <button class="btn btn-sm" onclick="this.parentNode.remove()">X</button>
                    </div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Tipo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->apellidos }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->tipo }}</td>
                                <td>
                                    @if($user->id != 1)
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn-b btn-primary btn-sm">Editar</a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="post" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-b btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </section>
    <!-- End Section -->
@endsection
