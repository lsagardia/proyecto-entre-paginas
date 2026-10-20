<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];

echo "<h2>recibido</h2>";
echo "<p>Nombre:$nombre </p>";
echo "<p>Correo:$correo </p>";
echo "<p>Pedido:$mensaje </p>";
?>