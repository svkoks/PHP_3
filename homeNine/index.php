<?php

namespace homeNine;

const RAND_LEN = 1000000;

//1. Создать массив на миллион элементов и отсортировать его различными способами. Сравнить скорости.
$testArray1 = arrRand(RAND_LEN);
$timerStart = microtime(true);
$sort1 = sortPHP($testArray1);
echo 'сортировка PHP: ' . (microtime(true) - $timerStart) . '<br>';


$testArray2 = arrRand(RAND_LEN);
$timerStart = microtime(true);
$sort1 = rsortPHP($testArray2);
echo 'сортировка в обратном порядке PHP: ' . (microtime(true) - $timerStart) . '<br>';


$testArray3 = arrRand(RAND_LEN);
$timerStart = microtime(true);
$sort1 = asortPHP($testArray3);
echo 'сортировка с сохранением ключ - значение PHP: ' . (microtime(true) - $timerStart) . '<br>';


//2. удаление элемента из массива с применением различных алгоритмов поиска.
//3. Подсчитать практически количество шагов при поиске описанными в методичке алгоритмами.
$testArray4 = arrRand(RAND_LEN);
array_push($testArray4, 12);
$timerStart = microtime(true);
$arrUnset = interpolationSearch($testArray4, 12);
echo 'удалено ' . $arrUnset . ' элементов из массива --' . (microtime(true) - $timerStart) . '<br>';

$testArray5 = arrRand(RAND_LEN);
array_push($testArray5, 12);
$timerStart = microtime(true);
$arrUnset = binarySearch($testArray5, 12);
echo 'удалено ' . $arrUnset . ' элементов из массива --' . (microtime(true) - $timerStart) . '<br>';
