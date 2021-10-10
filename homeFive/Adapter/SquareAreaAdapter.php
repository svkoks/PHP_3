<?php

use ISquare;
use SquareAreaLib;

class SquareAreaAdapter implements ISquare
{
    private $squareAreaLib;
    private $sideSquare;

    public function __construct(SquareAreaLib $squareAreaLib, int $sideSquare)
    {
        $this->squareAreaLib = $squareAreaLib;
        $this->sideSquare = $sideSquare;
    }

    public function squareArea(int $circumference)
    {
        $diagonal = $sideSquare * sqrt(2);
        $squareArea = $this->squareAreaLib->getSquareArea($diagonal);
        return $squareArea;
    }
}
