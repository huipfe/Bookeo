<?php 

/**
 * This is a test page
 */  


class Product {
    protected string $name;
    protected string $description;
    protected float $price;

    public function getPrice() {
        return $this->price;
    }
    
}


$product1 = new Product();


?>