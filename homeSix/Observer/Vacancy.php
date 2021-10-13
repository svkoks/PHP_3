<?php

namespace Observer;

class Vacancy
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $url;

    public function getName(): string
    {
        return $this->name;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
} 