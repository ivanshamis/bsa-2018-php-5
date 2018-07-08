<?php

namespace App\Services;

class Currency
{
    protected $id;
    protected $name;
    protected $price;
    protected $image_url;
    protected $daily_change_percent;

    public function __construct($id,$name,$price,$image_url,$daily_change_percent)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image_url = $image_url;
        $this->daily_change_percent = $daily_change_percent;
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
        return $this->image_url;
    }

    public function getDailyChangePercent()
    {
        return $this->daily_change_percent;
    }
}