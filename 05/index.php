<?php
//методы класса
class User {
    public $name = "Имя";
    public $password = "Пароль";
    public $email = "Имеил";
    public $city = "Город";

//    public function Hello(){
//        echo "Hello {$this->name}";
//    }
    function getInfo(){
        return "{$this->name}". "{$this->surname}";
    }
}

$admin = new User();
//$admin->Hello();

$admin->name = "Artyom";
$admin->surname = "Antoshkin";
echo "Пользователь: {$admin->getInfo()}";