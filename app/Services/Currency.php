<?php

namespace App\Services;

class Currency
{
    protected $id;
    protected $name;
    protected $price;
    protected $imageUrl;
    protected $dailyChangePercent;

    public function __construct($id,$name,$price,$imageUrl,$dailyChangePercent)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->imageUrl = $imageUrl;
        $this->dailyChangePercent = $dailyChangePercent;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    public function getDailyChangePercent()
    {
        return $this->dailyChangePercent;
    }
}