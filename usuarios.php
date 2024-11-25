<?php
$titulo = "Gestor de Usuarios";

$items = [
    ['nombre' => 'Jose', 'edad' => 20, 'correo' => 'ispepe050@icloud.com']
];
include_once 'header.php';
?>
<?php if (isset($_GET) && $_GET['ok'] == 1): ?>
  <article>
    Nuevo usuario guardado con éxito
  </article>
<?php edif; ?>

<article>
  <h2>Lista de usuarios</h2>
  <div class="overflow-auto">
    <table class="table">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Edad</th>
          <th>Correo</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($items as $item): ?>
        <tr>
          <td><?= $item['nombre'] ?></td>
          <td><?= $item['edad'] ?></td>
          <td><?= $item['correo'] ?></td>
          <td></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</article>
