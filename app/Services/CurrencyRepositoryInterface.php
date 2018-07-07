<?php

namespace App\Services;

interface CurrencyRepositoryInterface
{
    public function __construct(array $currencies);

    public function findAll(): array;
}