<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Restablece tu password escribiendo tu email a continuación</p>

<form action="/olvide" class="formulario" method="POST">
  <div class="campo">
    <label for="email">Email</label>
    <input 
      type="email"
      id="email"
      name="email"
      placeholder="Tu E-mail"
    />
  </div>

  <input type="submit" class="boton" value="Enviar Instruciones">
</form>

<div class="acciones">
  <a href="/">¿Ya tienes unua cuenta? Inicia Sesión</a>
  <a href="/crear-cuenta">¿Aun no tienes una cuenta? Crea una</a>
</div>