<?php

class Product{

    public $id;
    public $name;
    public $price;

    public function __construct($var_id,$var_name,$var_price){
        $this->id=$var_id;
        $this->name=$var_name;
        $this->price=$var_price;
    }

    public function getFormattedPrice($Price){
        return "$" . number_format( $Price, 2, '.', '' );
    }

    public function showDetails(){
        echo "ID: {$this->id}\n";
        echo "Name: {$this->name}\n";
        echo "Price: {$this->getFormattedPrice($this->price)}";
    }

}

$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
