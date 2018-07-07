<?php

namespace App\Services;

class GetMostChangedCurrencyCommandHandler
{
    private $repository;

    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    public function handle()
    {
        $currencies = $this->repository->findAll();

        foreach ($currencies as $currency) {
            $changed[$currency->getID()] = $currency->getDailyChangePercent();
        }

        arsort($changed);

        foreach ($currencies as $currency) {
            if ($currency->getID()==array_keys($changed)[0]) { return $currency; } 
        }
    }
}