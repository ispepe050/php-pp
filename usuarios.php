<?php
require_once "db.php";

$sql = "SELECT * FROM usuarios";
$query = $pdo->prepare($sql);
$query->execute();

$items = $query->fetchAll(PDO::FETCH_ASSOC);

$titulo = "Gestor de Usuarios";

/*
$items  = [
  [
    'nombre' => 'José Angel',
    'edad' => 20,
    'correo' => 'ispepe050@icloud.com'
  ]
];
*/
include_once 'header.php';
?>

<h2>Usuarios</h2>
<a href="formulario.php" role="button">
  Nuevo usuario
</a>
<?php if (isset($_GET['ok']) && $_GET['ok'] == 1): ?>
  <article>
    ✅ Nuevo usuario guardado con éxito
  </article>
<?php endif; ?>
<div class="overflow">
  <table class="table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Correo</th>
        <th>
          <i class="ph ph-gear-six"></i>
        </th>
      </tr>
    <tbody>
      <?php foreach ($items as $item): ?>
        <tr>
          <td><?= $item['nombre'] ?></td>
          <td><?= $item['edad'] ?></td>
          <td><?= $item['email'] ?></td>
          <td>Opciones aquí</td>
        </tr>
      <?php endforeach; ?>
    </tbody>
    </thead>
  </table>
</div>


<?php
include_once 'footer.php';
?>