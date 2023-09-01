<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$operacion = $_GET['operacion'];

if ($operacion == "suma") {
    $total = $n1 + $n2;
} elseif ($operacion == "resta") {
    $total = $n1 - $n2;
} elseif ($operacion == "multiplicacion") {
    $total = $n1 * $n2;
} elseif ($operacion == "division") {
    if ($n2 == 0) {
        $total = "No se puede dividir por cero";
    } else {
        $total = $n1 / $n2;
    }
}
echo $total;
