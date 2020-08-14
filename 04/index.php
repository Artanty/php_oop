<?php
//свойства класса
class Shop {
    Private $name;

    public function naming(){
        $this->name = "Adidas";
        echo $this->name;
    }
}
$product = new Shop;
//$product->naming();
//$product->name = "Nike";

class User {
    public $name = "Имя";
    public $password ="Пароль";
    public $email = "Имеил";
    public $city = "Город";
//    в любых объектах, экземпляры которых мы создадим с помощью класса User
//    будут присвоены эти стандартные значения.
}
$admin = new User();
$user1 = new User();

$admin->name="Alexey";
$user1->name="Andrey";

echo $admin->name;
echo $user1->name;

$user1->surname = "Ivanov";
echo $user1->surname;


//echo $admin->name;
