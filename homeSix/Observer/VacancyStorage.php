<?php

namespace Observer;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class VacansyStorage implements SplSubject
{
    /**
     * @var Vacancy[]
     */
    private $vacancies;

    /**
     * @var SplObjectStorage
     */
    private $observers;

    public function __construct(array $vacancies)
    {
        $this->vacancies = $vacancies;
        $this->observers = new SplObjectStorage();
    }

    public function  addNewVacancy(Vacancy $vacancy)
    {
        array_push($this->vacancies, $vacancy);
        echo "Добавлена новая вакансия {$vacancy->getName()}: {$vacancy->getUrl()}";
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
} 