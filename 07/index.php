<?php
class User{
    public $name;
    public $password;
    public $email;
    public $city;

    public function getname(){
        echo $this->name;
        $this->test();
    }
    public function test(){
        echo 'Test';
    }
}

$user1 = new User;
$user1->name = "Artyom";
$user1->getname();

$user2 = new User;
$user2->name = "Hodgence";
$user2->getname();

