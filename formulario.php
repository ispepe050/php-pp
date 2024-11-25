<?php
include_once "header.php";
?>

<?php if (isset($_GET) && $_GET['ok'] == 1): ?>
  <article>
    <?php
    switch ($_GET) {
        case '1':
            echo"Todos los campos son requeridos";
            break;
        case '2':
            echo"La edad debe ser numero y mayoe a 18";
            break;
        case '3':
            echo"El correo debe ser valido";
            break;
    }
    ?>
  </article>
  <?php endif; ?>

  <article>
  <h2>Formulario de registro</h2>
  <form action="procesa.php" method="post">
    <fieldset>
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre" />
    </fieldset>
    <fieldset>
      <label for="edad">Edad</label>
      <input type="number" name="edad" id="edad" min="0" max="120" />
    </fieldset>
    <fieldset>
      <label for="correo">Correo</label>
      <input type="email" name="correo" id="correo" />
    </fieldset>
    <fieldset>
      <button type="submit">Guardar</button>
      <a href="index.php" role="button" class="secondary">Regresar</a>
    </fieldset>
  </form>
</article>


<?php
include_once "footer.php"
?>