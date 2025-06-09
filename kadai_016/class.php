<?php

class Food {

    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        echo $this->price . "\n";
    }
}

class Animal {

    private $name;
    private $height;
    private $weight;

    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
        echo $this->height . "\n";
    }
}

// Foodクラスのインスタンスを作成
$food = new Food("potato", 250);

// Animalクラスのインスタンスを作成
$animal = new Animal("dog", 60, 5000);

// それぞれのインスタンスを出力
print_r($food);
print_r($animal);

// Foodクラスのshow_priceメソッドを実行
$food->show_price();

// Animalクラスのshow_heightメソッドを実行
$animal->show_height();

?>