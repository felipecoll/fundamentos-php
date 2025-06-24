<?php
$curso = [
    "titulo" => "Fundamentos de PHP",
    "descripcion" => "Aprende PHP y desarrolla aplicaciones web dinámicas con bases de datos.",
    "duracion" => "4 semanas",
    "profesor" => "Italo Morales",
    "lecciones" => [
        "Introducción a PHP",
        "Sintaxis básica",
        "Variables y tipos de datos",
        "Estructuras de control",
        "Funciones y programación orientada a objetos",
        "Bases de datos con MySQL",
        "Desarrollo de aplicaciones web"
    ],
    
];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $curso["titulo"]; ?></title>
</head>
<body>
<h2><?= $curso["titulo"]; ?></h2>
<h3><?= $curso["profesor"]; ?></h3>
<p><?= $curso["descripcion"]; ?></p>

<ul>
    <?php foreach ($curso["lecciones"] as $leccion) : ?>
        <li><?= $leccion; ?></li>
    <?php endforeach; ?>
</ul>
<p>Curso creado por <strong>Platzi</strong></p>
</body>
</html>