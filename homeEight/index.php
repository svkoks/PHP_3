<?php

// 1. Написать аналог «Проводника» в Windows для директорий на сервере при помощи итераторов.

function explorer($dir)
{
    $currentDirectory = new DirectoryIterator(realpath($dir));
    getContent($currentDirectory);
}

function getContent($currentDirectory)
{
    foreach ($currentDirectory as $item) {
        if ($item->isDot()) {
            continue;
        } else if (!$item->isDir()) {
            echo "{$item->getBaseName()}<br>";
        } else echo "<a href='?path={$item->getPathname()}'>{$item}</a><br>";
    }
}

if (!empty($_GET['path'])) {
    explorer($_GET['path']);
} else {
    explorer('/');
}

// 2. Определить сложность следующих алгоритмов:

// поиск элемента массива с известным индексом, 

$arr = [0, 1, 2, 3, 4 ,5];
$findElementFromIndex = $arr[0]; // Сложность алгоритма О(1), т.к. индекс известен и операция всего одна

// дублирование массива через foreach,
$newArr = [];
foreach($arr as $el) { // О(count($arr)) = O(N)
    $newArr[] = $el; 
}

// рекурсивная функция нахождения факториала числа.
function factorial($x) { 
    if ($x === 0)
        return 1;
    return $x * factorial($x-1);
}
factorial(5); // O(N)

// 3. Определить сложность следующих алгоритмов. Сколько произойдет итераций?
// 1)
$n = 100;
$array[]= [];

for ($i = 0; $i < $n; $i++) { // O(N)
    for ($j = 1; $j < $n; $j *= 2) { // O(N)
        $array[$i][$j]= true;
    } 
}
/* Итого: O(N * N) = O(n^2);
На каждую итерацию внешнего цикла получим 7 итераций внутреннего и в итоге получаем 700 итераций */

// 2)
$n = 100;
$array[] = [];

for ($i = 0; $i < $n; $i += 2) { // O(N/2)
    for ($j = $i; $j < $n; $j++) { // Этот цикл будет запускаться 50 раз, но число операций в каждом цикле будет уменьшаться на 2 с каждым новым циклом
        echo $j . '<br>';
        $array[$i][$j]= true;
    } 
} // Т.к. цила вложженных два, то сложность O(N^2)