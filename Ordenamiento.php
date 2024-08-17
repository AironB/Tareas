<?php
// https://parzibyte.me/blog
function burbuja(&$arreglo)
{
    $longitud = count($arreglo);
    for ($i = 0; $i < $longitud; $i++) {
        for ($j = 0; $j < $longitud - 1; $j++) {
            if ($arreglo[$j] > $arreglo[$j + 1]) {
                $temporal = $arreglo[$j];
                $arreglo[$j] = $arreglo[$j + 1];
                $arreglo[$j + 1] = $temporal;
            }
        }
    }
}

$miArreglo = [5, 1, 80, 10, 7, 66, 100];
echo "<p>Antes de ordenar: </p>";
print_r($miArreglo);
# Lo ordenamos
burbuja($miArreglo);
echo "<p>Después de ordenar: </p>";
print_r($miArreglo);

function mergeSort($arr) {
    $n = count($arr);
    if ($n <= 1) {
        return $arr;
    }
    // Dividir la lista en dos mitades
    $middle = (int) ($n / 2);
    $left = array_slice($arr, 0, $middle);
    $right = array_slice($arr, $middle);
    // Ordenar recursivamente las mitades
    $left = mergeSort($left);
    $right = mergeSort($right);
    // Fusionar las sublistas ordenadas
    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }
    // Agregar los elementos restantes de las sublistas
    while (count($left) > 0) {
        $result[] = array_shift($left);
    }
    while (count($right) > 0) {
        $result[] = array_shift($right);
    }
    return $result;
}

// Ejemplo de uso
$arr = [64, 34, 0, 25, -12, 22, 11, 90, 3];
echo "<p>Array original: </p>";
print_r($arr);
echo "<p>Array ordenado usando Merge Sort: </p>";
print_r(mergeSort($arr));

function insertionSort($arr) {
    $n = count($arr);
    // Iterar sobre todos los elementos del array
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        // Mover los elementos del array que son mayores que $key
        // a una posición adelante de su posición actual
        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

// Ejemplo de uso
$arr = [64, 34, 0, 25, -12, 22, 11, 90, 3];
echo "<p>Array original: </p>";
print_r($arr);
echo "<p>Array ordenado usando Insertion Sort: </p>";
print_r(insertionSort($arr));
