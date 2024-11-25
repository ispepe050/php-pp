<?php
if(!empty($_GET)){
    print_r(value: $_GET);
}

if(!empty($_POST)){
    print_r(value: $_POST);
}

[
    'nombre' => $nombre ?? '',
    'edad' => $edad ?? '',
    'correo' => $correo ?? '',
] = $_POST;

if (empty($nombre) || empty($edad) || empty($correo)) {
    header('Location: nuevo-usuario.php?error=1');
    exit;
}
if (!is_numeric($edad) || $edad < 18) {
    header('Location: nuevo-usuario.php?error=2');
    exit;
}
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    header('Location: nuevo-usuario.php?error=3');
    exit;
}

// ...
header('Location: index.php?ok=1');
