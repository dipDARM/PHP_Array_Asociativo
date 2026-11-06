<?php
$inventario = [
    "manzanas" => 50,
    "peras"    => 30,
    "naranjas" => 0,
    "uvas"     => 15,
];

$inventario["peras"] += 10;

$inventario["mangos"] = 20;

foreach ($inventario as $producto => $cantidad) {
    echo "$producto: $cantidad unidades<br>";
}

echo "<br> VERIFICACIÓN DE KIWIS <br>";
if (isset($inventario["kiwis"])) {
    echo "kiwis si se encuentra en el inventario.<br>";
} else {
    echo "kiwis no existe en el inventario.<br>";
}

$totalCiclo = 0;
foreach ($inventario as $producto => $cantidad) {
    $totalCiclo += $cantidad;
}

$totalFuncion = array_sum($inventario);

echo "<br> CÁLCULO DEL TOTAL <br>";
echo "Total calculado con ciclo foreach: $totalCiclo unidades <br>";
echo "Total calculado con array_sum(): $totalFuncion unidades <br>";
