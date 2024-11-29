<?php
require_once "db.php";

if (!empty($_GET)) {
  print_r($_GET);
}

if (!empty($_POST)) {
  // print_r($_POST);
  [
    'nombre' => $nombre,
    'edad' => $edad,
    'correo' => $correo
  ] = $_POST;

  if (empty($nombre) || empty($edad) || empty($correo)) {
    header("Location: formulario.php?error=1");
    exit;
  }

  if (!is_numeric($edad) || $edad < 18) {
    header("Location: formulario.php?error=2");
    exit;
  }

  if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    header("Location: formulario.php?error=3");
    exit;
  }

  // Guardar el usuario...

  $sql = "INSERT INTO usuarios(nombre, edad, email) VALUES (:nombre, :edad, :correo)";
  $query = $pdo->prepare($sql);
  $query->execute([
    ':nombre' => $nombre,
    'edad' => $edad,
    'correo' => $correo
  ]);

  $id = $pdo->lastInsertId();


  header("Location: usuarios.php?ok=1");
}