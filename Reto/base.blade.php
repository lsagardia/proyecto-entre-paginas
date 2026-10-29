<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre páginas</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
    
<body>
    <header>

        <h1 class="header">Entre páginas</h1>
        <p>Café, libros y momentos tranquilos</p>
        <button type="button" id="btn-tema" class="boton-modo">modo noche</button>
       <button type="button" id="btn-menu" class="boton-menu">Abrir</button>
        <nav id="menu-nav">
        <a href="{{url('/nosotros')}}">Nosotros</a>
        <a href="{{url('/menu')}}">Menú</a>
        <a href="{{url('/libros')}}">Libros</a>
        <a href="{{url('/contacto')}}">Contacto</a>
       </nav>

    </header>
    <main>
         @yield('content')
    </main>
       <footer>
        <p>&copy; 2026 Entre Páginas - Sagardia Serrudo Linn Ibeth </p>
      </footer>
      <script src="{{asset('js/script.js')}}"></script>
</body>
</html>