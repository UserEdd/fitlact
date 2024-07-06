<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|regex:/^[a-zA-Z\s]+$/',
            'apellidos' => 'required|string|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'tipo' => 'required|in:cliente,administrador',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'apellidos' => $request->input('apellidos'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'tipo' => $request->input('tipo'),
        ]);

        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
        {
            $request->validate([
                'name' => 'required',
                'apellidos' => 'required',
                'email' => 'required|email|unique:users,email,' . $id,
                'password' => 'nullable|min:8',
                'tipo' => 'required|in:cliente,administrador',
            ]);

            $user = User::findOrFail($id);

            $user->update([
                'name' => $request->input('name'),
                'apellidos' => $request->input('apellidos'),
                'email' => $request->input('email'),
                'password' => $request->filled('password') ? Hash::make($request->input('password')) : $user->password,
                'tipo' => $request->input('tipo'),
            ]);

            return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente.');
        }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente.');
    }

    public function show($id)
        {
            $user = User::findOrFail($id);
            return view('users.index', compact('user'));
        }

    public function login_create(){
        return view('auth.login');
    }


    public function login_store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'El correo electrónico es requerido.',
            'email.email' => 'Ingresa un formato válido de correo electrónico (ejemplo@gmail.com)',
            'password.required' => 'La contraseña es requerida.',
        ]);
    
        $credenciales = $request->only('email', 'password'); // Obtener credenciales del formulario
    
        // Buscar usuario en la base de datos por correo electrónico
        $usuario = User::where('email', $credenciales['email'])->first();
    
        // Verificar si se encontró un usuario y la contraseña es correcta
        if ($usuario && Hash::check($credenciales['password'], $usuario->password)) {
            // La contraseña es correcta
            if ($usuario->tipo == 'cliente') {
                auth()->login($usuario);
                // Redirigir a la ruta principal si el usuario es un cliente
                return redirect()->route('inicio.index');
            } else if($usuario->tipo == 'administrador') {
                auth()->login($usuario);
                
                // Redirigir a otra ruta si el usuario no es un cliente
                return redirect()->route('inicio_admin.index');
            }
        } else {
            // El usuario no fue encontrado o la contraseña es incorrecta
            return redirect()->back()->withErrors(['password' => 'Correo electrónico o contraseña incorrectos.']);
        }
    }
    

    public function login_destroy(){
        auth()-> logout();
        return redirect() -> to('/');
    }



    public function newUser()
    {
        return view('users.re');
    }

    public function registro(Request $request)
    {
        $request->validate([
            'name' => 'required|string|regex:/^[a-zA-Z\s]+$/',
            'apellidos' => 'required|string|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'tipo' => 'required|in:cliente,administrador',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->apellidos = $request->apellidos;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->tipo = $request->tipo;
        $user->save();

        return redirect()->route('login.create')->with('success', 'Usuario creado correctamente.');
    }

}
