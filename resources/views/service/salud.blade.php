@extends('layouts.app')
@section('title', 'FitLact - Salud')

<style>
    div {
        font-family: Arial, sans-serif;
    }
    h1{
        text-align: center;
        color: #0066cc;
    }
    ul {
        list-style-type: none;
        padding: 0;
    }
    li{
        margin-bottom: 10px;
    }
</style>
@section('content')
<div>
    <h1>Información de Salud</h1>
    <p>A continuación se presenta su situación de salud</p>
    <ul>
        <li>
            <strong>Manzana:</strong>
            100 gramos de manzana contiene 52 calorías, 0.2g de grasa, 13.8g de carbohidratos y 0.3g de proteina. 
        </li>
    </ul>
</div>
@endsection