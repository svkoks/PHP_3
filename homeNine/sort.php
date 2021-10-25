<?php

function arrRand($arrLen)
{
    $arr = [];
    $count = 0;
    while ($count <= $arrLen) {
        $arr[] = rand(0, $arrLen);
        $count++;
    }
    return $arr;
}

function sortPHP($arr)
{
    return sort($arr);
}


function rsortPHP($arr)
{
    return rsort($arr);
}

function asortPHP($arr)
{
    return asort($arr);
}