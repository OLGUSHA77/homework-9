<?php

class Car {
    private $marka;
    private $color;
    private $engine;
    private $typeDrive;
    private $countDoors;
    private $price;

   public function getMarka()
    {
        return $this->marka;
    }

   public function setMarka($marka)
    {
        $this->marka = $marka;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function getEngine()
    {
        return $this->engine;
    }

    public function setEngine($engine)
    {
        $this->engine = $engine;
        return $this;
    }

    public function getTypeDrive()
    {
        return $this->typeDrive;
    }

    public function setTypeDrive($typeDrive)
    {
        $this->typeDrive = $typeDrive;
        return $this;
    }

    public function getCountDoors()
    {
        return $this->countDoors;
    }

    public function setCountDoors($countDoors)
    {
        $this->countDoors = $countDoors;
        return $this;
    }

}
class TVset {
    private $marka;
    private $country;
    private $type;
    private $sizeDisplay;
    private $price;

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function getMarka()
    {
        return $this->marka;
    }

    public function setMarka($marka)
    {
        $this->marka = $marka;
        return $this;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function getSizeDisplay()
    {
        return $this->sizeDisplay;
    }

    public function setSizeDisplay($sizeDisplay)
    {
        $this->sizeDisplay = $sizeDisplay;
        return $this;
    }


}
class Pen{
    private $brand;
    private $color;
    private $price;

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

}
class Durk{
    private $poroda;
    private $color;
    private $atHome;
    private $price;

    public function getPoroda()
    {
        return $this->poroda;
    }

    public function setPoroda($poroda)
    {
        $this->poroda = $poroda;
        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function getAtHome()
    {
        return $this->atHome;
    }

    public function setAtHome($atHome)
    {
        $this->atHome = $atHome;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}
class Product{
    private $name;
    private $article;
    private $company;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getArticle()
    {
        return $this->article;
    }

    public function setArticle($article)
    {
        $this->article = $article;
        return $this;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
    private $price;


}

$AUTO_1 = new Car();
$AUTO_1
    ->setColor('silver metallic')
    ->setMarka('MERCEDES C204')
    ->setEngine('diesel')
    ->setCountDoors(5)
    ->setPrice(1000)
;

$AUTO_2 = new Car();
$AUTO_2
    ->setColor('brown')
    ->setMarka('Renault Sandero')
    ->setEngine('bensin')
    ->setCountDoors(3)
    ->setPrice(500)
;

$Pen_1 = new Pen();
$Pen_1
    ->setBrand('Pilot')
    ->setColor('blue')
    ->setPrice('10')
;
$Pen_2 = new Pen();
$Pen_2
    ->setBrand('Berlingo')
    ->setColor('black')
    ->setPrice('5')
;

$TV_1 = new TVset();
$TV_1
    ->setMarka('Philips')
    ->setCountry('Europe')
    ->setSizeDisplay(28)
    ->setType('LCD')
    ->setPrice(100)
;
$TV_2 = new TVset();
$TV_2
    ->setMarka('Toshiba')
    ->setCountry('Japan')
    ->setSizeDisplay(50)
    ->setType('LCD')
    ->setPrice(300)
;

$homeDurk = new Durk();
$homeDurk
    ->setColor('white')
    ->setAtHome('home')
    ->setPrice(20)
    ;
$forestDurk = new Durk();
$forestDurk
    ->setColor('brown')
    ->setAtHome('forest')
    ->setPrice(40)
;

$trousers = new Product();
$trousers
    ->setName('trousers')
    ->setArticle(123456)
    ->setCompany('ERA')
    ->setPrice(150)
;
$mobilePhone = new Product();
$mobilePhone
    ->setName('iPad 7')
    ->setArticle(987456)
    ->setCompany('Apple')
    ->setPrice(3500)
;


