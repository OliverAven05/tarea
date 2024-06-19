<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Prestar Libro - Biblioteca Reborn</title>
<style>
    body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
        color: #333;
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
    .card {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
    }
    .card-title {
        color: #007bff;
        font-size: 24px;
        margin-bottom: 10px;
    }
    .card-text {
        margin-bottom: 5px;
    }
    .form-control {
        border-radius: 5px;
        border-color: #ced4da;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 5px;
        color: #fff;
        font-weight: bold;
        padding: 10px 20px;
        margin-top: 20px;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Préstamo de Libro') }}
        </h2>
    </x-slot>

    <div class="container">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Título: {{ $libro->titulo }}</h5>
                <p class="card-text">Autor: {{ $libro->autor->n_autor }}</p>
                <p class="card-text">Editorial: {{ $libro->editorial->n_editorial }}</p>
                <p class="card-text">Año: {{ $libro->annio }}</p>
                
                <form action="{{ route('prestamos.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="DNI">DNI</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->dni }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Ubigeo">Ubigeo</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->ubigeo }}" disabled>
                    </div>
                    <hr>
                    <input type="hidden" name="id_libro" value="{{ $libro->id_libro }}">
                    
                    <div class="form-group">
                        <label for="inicio">Fecha de Inicio</label>
                        <input type="date" class="form-control" id="inicio" name="inicio" value="{{ now()->format('Y-m-d') }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="fin">Fecha de Devolución</label>
                        <input type="date" class="form-control" id="fin" name="fin" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Confirmar Préstamo</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>

