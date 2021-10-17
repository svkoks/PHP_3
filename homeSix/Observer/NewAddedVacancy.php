<?php

namespace Observer;

use SplObserver;
use SplSubject;

class NewAddedVacancy implements SplObserver
{

    public function update(SplSubject $subject)
    {
        echo "Появилась новая вакансия по запросу";
    }
} 