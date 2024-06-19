<html>
<head>
    <title>Editar Préstamo</title>
</head>
<body>
    <h1>Editar Préstamo</h1>
    
    <form method="post" action="{{ route('prestamos.update', $prestamo->id) }}">
        @method('patch')
        @csrf
        <input type="hidden" name="id" value="{{ $prestamo->id }}">
        <div>
            <label for="inicio">Inicio</label>
            <input type="text" name="inicio" value="{{ $prestamo->inicio }}" />
        </div>
        <div>
            <label for="fin">Fin</label>
            <input type="text" name="fin" value="{{ $prestamo->fin }}" />
        </div>
        <div>
            <label for="estado">Estado</label>
            <input type="text" name="estado" value="{{ $prestamo->estado }}" />
        </div>
        <button type="submit">Actualizar</button>
    </form>
    
    <a href="{{ route('prestamos.index') }}">Volver</a>
</body>