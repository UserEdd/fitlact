@extends('layouts.app')
@section('content')

<style>
    /* Agrega estilos personalizados */
    .form-control {
        border: 1px solid rgba(0, 0, 0, 0.3); /* Negro con opacidad del 30% */
    }

    /* Opcional: Ajusta el color del texto del placeholder si es necesario */
    .form-control::placeholder {
        color: rgba(0, 0, 0, 0.5); /* Negro con opacidad del 50% para el texto del placeholder */
    }

    .enlace {
        margin-top: 1rem;
        margin-bottom: 1.5rem;
    }

    .enlace a {
        color: #4e6be0; /* Color del enlace (puedes ajustarlo según tus necesidades) */
        text-decoration: none; /* Elimina la subrayado predeterminado */
    }

    .login-text{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
    }

    .login-text p{
        text-transform: uppercase;
        color: #4e6be0;
    }

    .message p{
        color: red;
    }

    .password-container {
            position: relative;
            /* width: 100%; */
        }

    .toggle-button {
        position: absolute;
        right: 15px;
        top: 50%;
        /* transform: translateY(-50%); */
        cursor: pointer;
    }

    .button-login{
        background-color: #4e6be0;
        color: white;
    }

</style>

<div class="container py-5">
    <div class="row py-5">
        <div class="message">
            @if(session('mensaje'))
                <p class="fs-5">{{ session('mensaje') }}</p>
            @endif

            <!-- @error('error')
                <p>{{ $error }}</p>
            @enderror -->
        </div>
        <div class="login-text">
            <p class="fs-4 fw-bold">Inicia sesión</p>
        </div>
        <div class="col-md-4 mx-auto">
            <form method="post" action="{{ route('login.store') }}">
                @if (session('error'))
                    <p class="fs-6 text-danger">{{ session('error') }}</p>
                @endif
                @csrf
                <div class="form-group mb-2">
                    <label>Correo electrónico</label>
                    <input type="text" name="email" class="form-control mt-1">  
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-2 password-container">
                    <label>Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <span class="toggle-button" onclick="togglePasswordVisibility()"><i class="fa-solid fa-eye"></i></span>
                </div>
                
                <div class="enlace">
                    <a href="{{ route('user.create')}}">REGISTRARSE</a>
                </div>

                <div class="text-center mt-2">
                    <input type="submit" value="Iniciar sesión" class="btn btn-lg px-3 button-login">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");

        // Cambia el tipo de input entre "password" y "text"
        passwordInput.type = (passwordInput.type === "password") ? "text" : "password";
    }
</script>

@endsection