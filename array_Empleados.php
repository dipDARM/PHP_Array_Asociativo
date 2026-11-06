<?php
$empleados = [
    ["nombre" => "Sofía", "depto" => "Ventas", "salario" => 2500000],
    ["nombre" => "Pedro", "depto" => "Sistemas", "salario" => 4000000],
    ["nombre" => "Laura", "depto" => "Ventas", "salario" => 2800000],
    ["nombre" => "Andrés", "depto" => "Sistemas", "salario" => 4500000],
    ["nombre" => "Julia", "depto" => "Recursos", "salario" => 3000000],
];

$porDepto = [];
$sumaSalariosDepto = [];
$contadorEmpleadosDepto = [];

foreach ($empleados as $emp) {
    $nombre = $emp["nombre"];
    $depto = $emp["depto"];
    $salario = $emp["salario"];

    $porDepto[$depto][] = $nombre;

    if (!isset($sumaSalariosDepto[$depto])) {
        $sumaSalariosDepto[$depto] = 0;
        $contadorEmpleadosDepto[$depto] = 0;
    }

    $sumaSalariosDepto[$depto] += $salario;
    $contadorEmpleadosDepto[$depto]++;
}

$promedioSalarioDepto = [];
$deptoNominaAlta = "";
$mayorNomina = -1;

foreach ($sumaSalariosDepto as $depto => $totalNomina) {

    $cantidad = $contadorEmpleadosDepto[$depto];
    $promedioSalarioDepto[$depto] = $totalNomina / $cantidad;

    if ($totalNomina > $mayorNomina) {
        $mayorNomina = $totalNomina;
        $deptoNominaAlta = $depto;
    }
}


echo "LISTA DE EMPLEADOS POR DEPARTAMENTO (\$porDepto) <br>";
foreach ($porDepto as $depto => $nombres) {
    echo "$depto: " . implode(", ", $nombres) . "<br>";
}

echo "<br> SALARIO PROMEDIO POR DEPARTAMENTO <br>";
foreach ($promedioSalarioDepto as $depto => $promedio) {
    echo "$depto: $" . number_format($promedio, 2) . "<br>";
}

echo "<br> DEPARTAMENTO CON LA NÓMINA TOTAL MÁS ALTA <br>";
echo "El departamento es: $deptoNominaAlta con un total de $" . number_format($mayorNomina, 2) . " <br>";
