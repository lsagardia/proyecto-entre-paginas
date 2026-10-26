<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1 class="header">Entre Páginas</h1>
        <p>Café, libros y momentos tranquilos</p>
        <button type="button" id="btn-tema" class="boton-modo">modo noche</button>
       <button type="button" id="btn-menu" class="boton-menu">Abrir</button>
        <nav id="menu-nav">
        <a href="#nosotros">Nosotros</a>
        <a href="#menu">Menú</a>
        <a href="#libros">Libros</a>
        <a href="#contacto">Contacto</a>
       </nav>
    </header>
    <main>
         @yield('content')
    </main>
       <footer>
        <p>@Sagardia Serrudo Linn Ibeth</p>
      </footer>

</body>
</html>