<?php 
    $course = "Curso profesional de PHP"
    $archive = false
    $_ENV['APP_ENV'] = 'production';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? $course ?></title>
</head>
<body>
    <h1></h1><?php echo $course; ?></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae sapiente aut, facilis, ab perferendis maiores reiciendis vero adipisci commodi quam saepe dolores voluptates, ullam id rem laudantium! Sunt, provident quas.</p>

    <?php ?>
        if ($archive) {
            echo "<p>El curso está archivado.</p>";
        } else {
            echo "<p>El curso no está archivado.</p>";
        }
</body>
</html>