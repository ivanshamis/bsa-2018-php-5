<?php

namespace App\Services;

class GetCurrenciesCommandHandler
{
    private $repository;

    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    public function handle(): array
    {
        return $this->repository->findAll();
    }
}