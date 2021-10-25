<?php

function binarySearch($myArray, $num)
{

    $left = 0;
    $right = count($myArray) - 1;
    $count = 0;
    $numberSteps = 0;
    sort($myArray);
    while ($left <= $right) {

        $middle = floor(($right + $left) / 2);
        if ($myArray[$middle] == $num) {
            unset($myArray[$middle]);
            $count++;
        } elseif ($myArray[$middle] > $num) {
            $right = $middle - 1;
        } elseif ($myArray[$middle] < $num) {
            $left = $middle + 1;
        }
        $numberSteps++;
    }
    echo 'binarySearch. Количество шагов: ' . $numberSteps . '<br>';
    return $count;
}

function interpolationSearch($myArray, $num)
{
    $start = 0;
    $last = count($myArray) - 1;
    $count = 0;
    $numberSteps = 0;
    sort($myArray);
    while (($start <= $last) && ($num >= $myArray[$start])
        && ($num <= $myArray[$last])) {

        $pos = floor($start + (
                (($last - $start) / ($myArray[$last] - $myArray[$start]))
                * ($num - $myArray[$start])
            ));
        if ($myArray[$pos] == $num) {
            unset($myArray[$pos]);
            $count++;
        }

        if ($myArray[$pos] < $num) {
            $start = $pos + 1;
        } else {
            $last = $pos - 1;
        }
        $numberSteps++;
    }
    echo 'interpolationSearch. Количество шагов: ' . $numberSteps . '<br>';
    return $count;
}