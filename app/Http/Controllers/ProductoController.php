<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;


class ProductoController extends Controller
{
    public function index()
    {
        try {
            $productos = Producto::all();
            return view('producto.show', compact('productos'));
        } catch (\Exception $e) {
            //Log::error("Error al recuperar los productos: {$e->getMessage()}");
            // return response()->view('errors.500', [], 500);
            return view('errors.500');
            //return redirect()->route('');
        }
    }

    public function create()
    {
        return view('producto.create');
    }

    public function store(Request $request)
    {
        $campos=[
            'imagen'=> 'nullable|image',
            'nombre'=> 'required|string|max:30', 
            'carbohidratos'=> 'required|string|max:8', 
            'proteinas'=> 'required|string|max:8', 
            'grasas'=>'required|string|max:8', 
            'calorias'=>'required|string|max:8', 
            'contenido'=>'required|string|max:8',
        ];
        $mensaje=[
            'required'=>':attribute requerido',
        ];
        
        $datos = $this->validate($request, $campos, $mensaje);

        if ($request->hasFile('imagen')) {
            $fotoPath = $request->file('imagen');
            $destinationPath = 'assets/image/';
            $filename = $fotoPath->getClientOriginalName();
            $uploadSuccess = $fotoPath->move(public_path($destinationPath), $filename);
            $datos['imagen'] = $destinationPath . $filename;
        }

        Producto::create($datos);
        return redirect()->route('productos.index')->with('success', 'Archivo agregado exitosamente.');
    }

    public function edit(Producto $producto)
    {
        return view('producto.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $campos=[
            'imagen'=> 'nullable|image',
            'nombre'=> 'required|string|max:30', 
            'carbohidratos'=> 'required|string|max:8', 
            'proteinas'=> 'required|string|max:8', 
            'grasas'=>'required|string|max:8', 
            'calorias'=>'required|string|max:8', 
            'contenido'=>'required|string|string|max:8',
        ];
        $mensaje=[
            'required'=>':attribute requerido',
        ];
        
        $this->validate($request, $campos, $mensaje);

        $producto->nombre = $request->nombre;
        $producto->carbohidratos = $request->carbohidratos;
        $producto->proteinas = $request->proteinas;
        $producto->grasas = $request->grasas;
        $producto->calorias = $request->calorias;
        $producto->contenido = $request->contenido;
    
        if ($request->hasFile('imagen')) {
            $foto = $request->file('imagen');
    
            if ($producto->imagen) {
                $ruta_imagen_anterior = public_path($producto->imagen);
                if (File::exists($ruta_imagen_anterior)) {
                    File::delete($ruta_imagen_anterior); 
                }
            }
    
            $destinationPath = 'assets/image/';
            $filename = $foto->getClientOriginalName();
            $uploadSuccess = $foto->move(public_path($destinationPath), $filename);
            $producto->imagen = $destinationPath . $filename;
        }

        $producto->save();
        return redirect()->route('productos.index')->with('success', 'Archivo actualizado exitosamente.');
    }

    public function destroy(Producto $producto)
    {
        if (!empty($producto->imagen) && file_exists(public_path($producto->imagen))) {
            unlink(public_path($producto->imagen));
        }

        $producto->delete();
        return redirect()->route('productos.index')->with('alert', 'Archivo eliminado exitosamente.');
    }
}
