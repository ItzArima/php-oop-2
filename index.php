<?php
/* create a class product */

class Product
{
    public $name;
    public $id;
    public $price;
    public $seller;
    public $aviable;

    function __construct(String $name, Int $id, Float $price, String $seller, Bool $aviable = true) {
        $this->name = $name;
        $this->id = $id;
        $this->price = $price;
        $this->seller = $seller;
        $this->aviable = $aviable;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getSeller()
    {
        return $this->seller;
    }

    public function getAviabile()
    {
        return $this->aviable;
    }
    public function setDiscount($number){
        $this->discount = $number;
    }
}

/* create a class discount to set on product */

class Discount
{
    public $discount;

    public function __construct(Int $discount = 0) {
        $this->discount = $discount;
    }
    public function setDiscount($number){
        $this->discount = $number;
    }

    public function getDiscount(){
        return $this->discount;
    }
}

/* create a product */
$product1 = new Product('tablet', 1234567, 1234.99, 'someone');

/* create a discount */
$discount1 = new Discount();
$discount1->setDiscount(80);

/* set the discount on product */
$product1->setDiscount($discount1->getDiscount());

echo '<pre>';
print_r($product1);
echo '<pre>';