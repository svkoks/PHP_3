<?php

namespace Observer;

use Observer\VacansyStorage;

class Seeker
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var int
     */
    private $workExperience;

    public function subscribeToNewVacancies(VacansyStorage $vacancies)
    {
        $observer = new NewAddedVacancy();
        $vacancies->attach($observer);
    }

    public function unsubcsribeFromNewVacancies(VacansyStorage $vacancies, NewAddedVacancy $observer)
    {
        $vacancies->detach($observer);
    }
}