<?php // src/functions.php

/**
 * Esa línea activa el modo de comprobación estricta de tipos (strict typing) en PHP.
Se coloca al principio del archivo y le dice al intérprete que debe respetar exactamente los tipos de datos indicados en las funciones.
 */



// 1) Matematica
function potencia(int $base, int $exp) {
    $resultado = pow($base, $exp);
    echo "El resultado de $base y exponente $exp es $resultado";
}


// 2) Paso por referencia: intercambiar valores
function swap(&$a, &$b): void
{
    $tmp = $a;
    $a = $b;
    $b = $tmp;
}


// 3) Variádica: suma de n números
function sumaTotal(int ...$nums): int
{
    $total = 0;
    foreach ($nums as $n) {
        $total += $n;
    }
    return $total;
}


// 4) Recursiva: factorial(n)
function factorial(int $n): int
{
    if ($n < 0) {
        throw new InvalidArgumentException("n >= 0");
    }
    return ($n <= 1) ? 1 : $n * factorial($n - 1);
}


// 5) Closure: crea un multiplicador
function crearMultiplicador(int $k): callable
{
    return function (int $n) use ($k): int {
        return $n * $k;
    };
}


// 6) Retorno múltiple: estadísticas básicas
function stats(array $nums): array
{
    if (empty($nums)) {
        return [0, 0, 0.0];
    }
    $min = min($nums);
    $max = max($nums);
    $avg = array_sum($nums) / count($nums);
    return [$min, $max, $avg];
}
