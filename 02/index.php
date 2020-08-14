<?php

include_once 'classes/Car.php';

function debug($data){
    echo '<pre>'. print_r($data,1).'</pre>';
    echo '<br>';
    var_dump($data);
}
$car1 = new Car();
$car2 = new Car();
//debug($car1);

$car1->brand = 'shit';
$car1->color = 'white';

//оператор, который позволяет получить доступ к свойству или методу класса
//->
$car2->color = 'фиолетовый';
$car2->brand = 'tavria';
$car2->speed = 140;

//добавляем новые свойства объекту
$car1->year = 2017;
$car2->year = 2018;

echo "<h3>О моем авто:</h3>
Марка: {$car1->brand}<br>
Цвет: {$car1->color}<br>";

//debug($car1);
//debug($car2);
