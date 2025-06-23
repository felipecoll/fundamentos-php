<?php
$curso = "Curso Profesional  PHP y laravel ";
$costo ="Gratis";
$fecha =date("Y-m-d");
$archivado = true;
$status = $archivado ? "Archivado" : "Activo"; //operador ternario
$nivel =  "Avanzado";
$etiquetas =[
    "PHP",
    "Laravel",
    "Javascript",
];
$etiquetas2 =[
    "mysql",
    "SQL",
    "MongoDb",
];
switch($nivel){
case "Basico":
    $nivelDesc="Personas con conocimientos basicos de programacion";
    break;
    case "Intermedio":
       $nivelDesc= "Personas con conocimentos previos de progrmacion y base de datos";
        break;
        case "Avanzado":
            $nivelDesc= "Personas con amplios conocimientos en la materia ";
            break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $curso ?></title>
</head>
<body>

     
     
     
    <h2>Bienvenido a el <?=$curso?></h2>
    <h3>Costo: <?= $costo ?></h3>
    <h3>Publicado: <?= $fecha?></h3>
       <p>El curso esta <?= $status ?></p>
    <p>Este curso esta diseñado para <?= $nivelDesc ?></p>
    <strong>Etiquetas</strong>
    <ul>
        <li><?= $etiquetas[0]?></li>
         <li><?= $etiquetas[1]?></li>
          <li><?= $etiquetas[2]?></li>
           <li><?= $etiquetas2[0]?></li>
            <li><?= $etiquetas2[2]?></li>
    </ul>
</body>
</html>
