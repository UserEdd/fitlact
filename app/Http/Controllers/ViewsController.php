<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    // NIVEL 1
    public function index_inicio(){
        return view('inicio'); 
    } 

    // NIVEL 2
    public function index_acerca(){
        return view('acerca'); 
    } 

    public function index_contacto(){
        return view('contacto'); 
    } 

    public function index_servicios(){
        return view('servicios'); 
    } 

    public function index_ayuda(){
        return view('ayuda'); 
    } 

    public function index_empezar(){
        return view('empezar'); 
    } 

    // NIVEL 3

    
    public function index_alimentacion(){
        return view('empezar.alimentacion'); 
    } 

    //SERVICIOS
    public function nutricion(){
        return view('service.nutricion');
    }

    // public function productos(){
    //     return view('service.productos');
    // }

    public function salud(){
        return view('service.salud');
    }

    // VISTAS DEL ADMINISTRADOR

    public function index_inicio_admin(){
        return view('administrador.inicio');
    }
}
