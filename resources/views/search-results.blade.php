<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultados de búsqueda - Biblioteca Reborn</title>
<!-- Bootstrap core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: #f8f9fa; /* Cambia el color de fondo a gris claro */
        color: #333; /* Cambia el color del texto a negro */
        font-family: Arial, sans-serif; /* Cambia la fuente del texto */
    }
    .list-group-item {
        background-color: #ffffff; /* Fondo blanco para las tarjetas */
        color: #000000; /* Texto negro para las tarjetas */
    }
    .fill-current {
        fill: orange; /* Cambia el color del logo a naranja */
    }
    /* Estilo personalizado para el color del texto azul */
    .text-blue {
        color: #007bff; /* Cambia el color del texto a azul */
    }
    /* Estilo para el botón de volver */
    .btn-volver {
        background-color: #007bff; /* Cambia el color del botón a azul */
        border-color: #007bff; /* Cambia el color del borde del botón a azul */
        color: #fff; /* Cambia el color del texto del botón a blanco */
    }
    .btn-volver:hover {
        background-color: #0056b3; /* Cambia el color del botón al pasar el mouse a azul oscuro */
        border-color: #0056b3; /* Cambia el color del borde del botón al pasar el mouse a azul oscuro */
    }
</style>
</head>
<body>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Resultados de búsqueda') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

@if($books->isEmpty())
    <p class="text-blue">No se encontraron libros.</p>
@else
    <ul class="list-group">
        @foreach($books as $book)
            <li class="list-group-item d-flex align-items-center" style="background-color: #ffffff; color: #000000;">
                <svg class="fill-current h-16 w-16 me-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M10 2a8 8 0 106.32 3.31L19.41 10l-1.41 1.41-3.09-3.1A8 8 0 0010 2m0 2a6 6 0 014.68 10.18l1.59 1.59-1.42 1.42-1.59-1.59A6 6 0 1110 4z"/>
                </svg>
                <div>
                    <strong>{{ $book->titulo }}</strong><br>
                    Autor: {{ $book->autor->n_autor }}<br>
                    Editorial: {{ $book->editorial->n_editorial }}<br>
                    Año: {{ $book->annio }}
                    @auth
                        <form action="{{ route('prestamos.create') }}" method="GET" style="display: block;">
                            
                            <input type="hidden" name="id_libro" value="{{ $book->id_libro }}">
                            <button type="submit" class="btn btn-primary btn-sm">Realizar Pedido de préstamo</button>
                        </form>
                        <form action="{{ route('prestamos.edit') }}" method="GET" class="mt-2">
                            <input type="hidden" name="id_libro" value="{{ $book->id_libro }}">
                            <button type="submit" class="btn btn-danger btn-sm">Editar Prestamo</button>
                        </form>
                    @else
                        <form action="{{ route('prestamos.create') }}" method="GET" class="mt-2">
                            <input type="hidden" name="id_libro" value="{{ $book->id_libro }}">
                            <button type="submit" class="btn btn-success btn-sm" disabled>Iniciar Sesión para Pedido</button> <!-- Cambio de btn-primary a btn-success -->
                        </form>
                    @endauth
                </div>
            </li>
        @endforeach
    </ul>
@endif

<a href="/" class="btn btn-volver mt-3">Volver</a> <!-- Cambio de clase de botón -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

