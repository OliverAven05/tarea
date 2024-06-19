<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Biblioteca Reborn</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta3/css/bootstrap.min.css" rel="stylesheet">

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Cambria;
      }
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #808080; /* Color de fondo gris */
        width: 100vw;
        height: 100vh;
        text-align: center;
      }
      header, footer {
        background-color: #808080; /* Color de fondo gris */
      }
      h3, .inner p, .nav-link {
        color: #0000FF; /* Color de letras azules */
      }
      .cover-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        color: #0000FF; /* Color de letras azules */
      }
      .masthead {
        margin-bottom: 2rem;
      }
      .mastfoot {
        color: rgba(0, 0, 0, .5);
      }
      .cover {
        padding: 0 1.5rem;
      }
      .cover .btn-lg {
        padding: .75rem 1.25rem;
        font-weight: 700;
      }
      .search-input {
        padding: 0.5rem;
        font-size: 1.25rem;
        width: 80%;
        background-color: #fff8;
        border: 1px solid #fff4;
        border-radius: 5px;
      }
    </style>
  </head>

  <body>

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column text-center">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Biblioteca Reborn</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            @if (Route::has('login'))
              @auth
                <a href="{{ url('/dashboard') }}" class="nav-link">Perfil</a>
              @else
                <a href="{{ route('login') }}" class="nav-link">Iniciar sesión</a>

                @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="nav-link">Registrarse</a>
                @endif
              @endauth
            @endif
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <form action="{{ route('search') }}" method="GET" class="form-inline">
          <input type="text" name="query" class="form-control search-input" placeholder="Buscar libros...">
        </form>
      </main>

    
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta3/js/bootstrap.min.js"></script>
  </body>
</html>
