<?php
$estudiantes = [
    "Ana"    => ["matematicas" => 4.5, "ciencias" => 3.8, "ingles" => 4.2],
    "Luis"   => ["matematicas" => 3.0, "ciencias" => 2.8, "ingles" => 3.5],
    "Marta"  => ["matematicas" => 5.0, "ciencias" => 4.7, "ingles" => 4.9],
    "Carlos" => ["matematicas" => 2.5, "ciencias" => 3.2, "ingles" => 2.9],
];

$promedios = [];
foreach ($estudiantes as $nombre => $materias) {
    $suma = $materias["matematicas"] + $materias["ciencias"] + $materias["ingles"];
    $promedios[$nombre] = round($suma / 3, 1);
}

$mejorNombre = "";
$mejorPromedio = -1;

$peorNombre = "";
$peorPromedio = 6;

foreach ($promedios as $nombre => $promedio) {

    if ($promedio > $mejorPromedio) {
        $mejorPromedio = $promedio;
        $mejorNombre = $nombre;
    }

    if ($promedio < $peorPromedio) {
        $peorPromedio = $promedio;
        $peorNombre = $nombre;
    }
}

$estadoEstudiantes = [];
foreach ($promedios as $nombre => $promedio) {
    if ($promedio >= 3.0) {
        $estadoEstudiantes[$nombre] = "Aprobado";
    } else {
        $estadoEstudiantes[$nombre] = "Reprobado";
    }
}

$sumaMatematicas = 0;
$sumaCiencias = 0;
$sumaIngles = 0;
$totalEstudiantes = 0;

foreach ($estudiantes as $nombre => $materias) {
    $sumaMatematicas += $materias["matematicas"];
    $sumaCiencias += $materias["ciencias"];
    $sumaIngles += $materias["ingles"];
    $totalEstudiantes++;
}

$promedioMatematicas = round($sumaMatematicas / $totalEstudiantes, 2);
$promedioCiencias = round($sumaCiencias / $totalEstudiantes, 2);
$promedioIngles = round($sumaIngles / $totalEstudiantes, 2);

echo "PROMEDIOS DE CADA ESTUDIANTE <br>";
foreach ($promedios as $nombre => $promedio) {
    echo "- $nombre: $promedio\n <br>";
}

echo "<br> MEJOR Y PEOR ESTUDIANTE <br>";
echo "El mejor promedio lo tiene: $mejorNombre con $mejorPromedio\n <br>";
echo "El promedio más bajo lo tiene: $peorNombre con $peorPromedio\n <br>";

echo "<br> CLASIFICACIÓN <br>";
foreach ($estadoEstudiantes as $nombre => $estado) {
    echo "- $nombre: $estado\n <br>";
}

echo "<br> PROMEDIO DE CADA MATERIA <br>";
echo "- Matemáticas: $promedioMatematicas\n <br>";
echo "- Ciencias: $promedioCiencias\n <br>";
echo "- Inglés: $promedioIngles\n <br>";
