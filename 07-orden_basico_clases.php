<?php
class Author {
    // Constructor y propiedades
    public function __construct(
        public string $genero,
        public string $nombre,
        public string $fechaNacimiento,
        public array $peliculas
    ) {}

    // Método para calcular la edad del autor
    public function edad(): int {
        $fechaNacimiento = new DateTime($this->fechaNacimiento);
        $fechaActual = new DateTime();
        return $fechaActual->diff($fechaNacimiento)->y;
    }

    // Método para contar la cantidad de películas
    public function totalPeliculas(): int {
        return count($this->peliculas);
    }
}
?>

<?php
// Crear autores del género horror
$king = new Author(
    genero: "Horror",
    nombre: "Stephen King",
    fechaNacimiento: "1947-09-21",
    peliculas: ["Carrie", "El resplandor", "Misery", "It"]
);

$carpenter = new Author(
    genero: "Horror",
    nombre: "John Carpenter",
    fechaNacimiento: "1945-01-16",
    peliculas: ["Halloween", "The Fog", "Escape from New York", "Big Trouble in Little China"]
);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores de Horror: Stephen King y John Carpenter</title>
</head>
<body>

<h2>Maestros del género <?= $king->genero ?></h2>

<section>
    <h3>Información del Autor</h3>
    <p><strong>Nombre:</strong> <?= $king->nombre ?></p>
    <p><strong>Fecha de Nacimiento:</strong> <?= $king->fechaNacimiento ?></p>
    <p><strong>Edad:</strong> <?= $king->edad() ?> años</p>
    <p><strong>Total de Películas:</strong> <?= $king->totalPeliculas() ?></p>
    <ul>
        <?php foreach ($king->peliculas as $pelicula) : ?>
            <li><?= $pelicula ?></li>
        <?php endforeach; ?>
    </ul>
</section>

<hr>

<section>
    <h3>Información del Autor</h3>
    <p><strong>Nombre:</strong> <?= $carpenter->nombre ?></p>
    <p><strong>Fecha de Nacimiento:</strong> <?= $carpenter->fechaNacimiento ?></p>
    <p><strong>Edad:</strong> <?= $carpenter->edad() ?> años</p>
    <p><strong>Total de Películas:</strong> <?= $carpenter->totalPeliculas() ?></p>
    <ul>
        <?php foreach ($carpenter->peliculas as $pelicula) : ?>
            <li><?= $pelicula ?></li>
        <?php endforeach; ?>
    </ul>
</section>

</body>
</html>