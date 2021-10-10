<?php

use SquareAreaLib;
use CircleAreaLib;
use SquareAreaAdapter;
use CircleAreaAdapter;

$squareSide = 30;
$circleLength = 70;

$squareAreaAdapter = new SquareAreaAdapter(new SquareAreaLib, $squareSide);
$circleAreaAdapter = new CircleAreaAdapter(new CircleAreaLib, $circleLength);

$squareArea = $squareAreaAdapter->squareArea($squareSide);
$circleArea = $circleAreaAdapter->circleArea($circleLength);