<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugueteria El trompo</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
    
<body>
    <header>

         <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Cerrar sesión</button>
            </form>

        <h1 class="header">Jugueteria el Trompo</h1>
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
        <p>Integradora -Sagardia Serrudo Linn Ibeth - 27 de octubre de 2026</p>
      </footer>
      <script src="{{asset('js/script.js')}}"></script>
</body>
</html>