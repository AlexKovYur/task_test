<?php
//12. Создать класс Product. В нем объявить свойство name и price, а так же создать метод createProduct().
// В нем принимаются два значения - название и цена. Так же создать метод showPrice(), который отдаст "Цена товара: price".

class Product {
    public $name;
    public $price;

    public function createProduct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function showPrice()
    {
        return 'Цена товара: ' . $this->price;
    }
}

$newProduct = new Product();
$newProduct->createProduct('Товар', 100);
echo $newProduct->showPrice();