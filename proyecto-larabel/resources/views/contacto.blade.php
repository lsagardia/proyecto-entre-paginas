   <section id="contacto">
       <h2>Contacto</h2>
       <p>Escríbenos o visítanos. Te esperamos</p>
       <form id="form-contacto" method="POST" action="procesar.php"  novalidate>
        <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
            <button type="submit">Enviar</button>
            <p id="aviso-contacto" class="aviso"></p>
       </form>
      </section>