<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prestar Libro - Biblioteca Reborn</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Préstamo de Libro') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
    <h1>Mis Préstamos</h1>
    @if($prestamos->isEmpty())
        <p>No tienes préstamos.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Inicio</th>
                    <th>Fin</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($prestamos as $prestamo)
                    <tr>
                        <td>{{ $prestamo->libro->titulo }}</td>
                        <td>{{ $prestamo->inicio }}</td>
                        <td>{{ $prestamo->fin }}</td>
                        <td>{{ $prestamo->estado }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
</div>
</x-app-layout>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>









