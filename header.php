<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla PHP</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.sand.min.css"
>
<link
      rel="stylesheet"
      type="text/css"
      href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/regular/style.css"
    />
</head>
<body>
    <main class="container">
        <h1> <?= $titulo ?? "PHP Demo" ?> </h1>