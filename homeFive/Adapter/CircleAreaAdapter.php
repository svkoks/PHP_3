<?php


use ICircle;
use CircleAreaLib;


class CircleAreaAdapter implements ICircle
{
    private $circleAreaLib;
    private $circumference;

    public function __construct(CircleAreaLib $circleAreaLib, $circumference)
    {
        $this->circleAreaLib = $circleAreaLib;
        $this->circumference = $circumference;
    }

    public function circleArea(int $circumference)
    {
        $diagonal = $circumference / M_PI;
        $circleArea = $this->circleAreaLib->getCircleArea($diagonal);
        return $circleArea;
    }
}