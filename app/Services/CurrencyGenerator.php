<?php

namespace App\Services;

class CurrencyGenerator
{
    public static function generate(): array
    {
        $currencies[] = new Currency(
            1,
            'Bitcoin',
            6634.91,
            'https://s2.coinmarketcap.com/static/img/coins/16x16/1.png',
            0.68
        );

        $currencies[] = new Currency(
            2,
            'Ethereum',
            471.85,
            'https://s2.coinmarketcap.com/static/img/coins/16x16/1027.png',
            1.38
        );

        $currencies[] = new Currency(
            3,
            'XRP',
            0.471945,
            'https://s2.coinmarketcap.com/static/img/coins/16x16/52.png',
            0.58
        );

        $currencies[] = new Currency(
            4,
            'Bitcoin Cash',
            724.06,
            'https://s2.coinmarketcap.com/static/img/coins/16x16/1831.png',
            0.01
        );

        $currencies[] = new Currency(
            5,
            'EOS',
            8.62,
            'https://s2.coinmarketcap.com/static/img/coins/16x16/1765.png',
            1.19
        );

        return $currencies;
    }
}