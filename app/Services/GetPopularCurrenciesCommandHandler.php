<?php

namespace App\Services;

class GetPopularCurrenciesCommandHandler
{
    const POPULAR_COUNT = 3;

    private $repository;

    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    public function handle(int $count = self::POPULAR_COUNT): array
    {
        $currencies = $this->repository->findAll();

        foreach ($currencies as $currency) {
            $prices[$currency->getID()] = $currency->getPrice();
        }

        arsort($prices);

        for ($i=0; $i<$count; $i++)
            foreach ($currencies as $currency) {    
                if ($currency->getID()==array_keys($prices)[$i]) { 
                    $popular[]=$currency; 
                } 
            }
        return $popular;
    }
}