<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;

Route::get('/', [ViewsController::class, 'index_inicio'])
    -> name('inicio.index');

Route::get('/acerca', [ViewsController::class, 'index_acerca'])
    -> name('acerca.index');

Route::get('/contacto', [ViewsController::class, 'index_contacto'])
    -> name('contacto.index');

Route::get('/servicios', [ViewsController::class, 'index_servicios'])
    -> name('servicios.index');

Route::get('/ayuda', [ViewsController::class, 'index_ayuda'])
    -> name('ayuda.index');

Route::get('/empezar', [ViewsController::class, 'index_empezar'])
    -> name('empezar.index');

    Route::get('/empezar/alimentacion', [ViewsController::class, 'index_alimentacion'])
    -> name('alimentacion.index');

// Servicios
Route::get('/nutricion', [ViewsController::class, 'nutricion'])
    -> name('nutricion.index');
// Route::get('/productos', [ViewsController::class, 'productos'])
//     -> name('productos.index');
Route::get('/salud', [ViewsController::class, 'salud'])
    -> name('salud.index');

/* ADMINISTRADOR */ 

// DASHBOARD
Route::middleware(['auth'])->group(function () { 
    Route::get('/administrador', [ViewsController::class, 'index_inicio_admin'])
        -> name('inicio_admin.index');
});  
// CRUD PRODUCTOS
Route::middleware(['auth'])->group(function () { 
    Route::get('administrador/alimentos', [ProductoController::class, 'index'])->name('productos.index');
    Route::get('administrador/alimentos/create', [ProductoController::class, 'create'])->name('productos.create');
    Route::post('administrador/alimentos', [ProductoController::class, 'store'])->name('productos.store');
    Route::get('administrador/alimentos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
    Route::put('administrador/alimentos/{producto}', [ProductoController::class, 'update'])->name('productos.update');
    Route::delete('administrador/alimentos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');
});

// CRUD USUARIOS
Route::middleware(['auth'])->group(function () { 
    Route::resource('users', UserController::class);
 });
 
 Route::get('user/create', [UserController::class, 'newUser'])->name('user.create');
 Route::post('user/create', [UserController::class, 'registro'])->name('user.registro');
 
 
 //PARA EL LOGIN
 Route::get('/iniciar-sesion', [UserController::class, 'login_create']) -> name('login.create');
 
 Route::post('/iniciar-sesion', [UserController::class, 'login_store']) -> name('login.store');
 
 Route::get('/registrar-usuarios', [UserController::class, 'create']) -> name('registrar.create');
 
 Route::post('/cerrar-sesion', [UserController::class, 'login_destroy'])->name('login.destroy');