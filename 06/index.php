<?php
//геттер, конструктор, деструктор
class User
{
    public $name;
    public $password;
    public $email;
    public $city;

    function __construct($name, $password, $email, $city)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }
    //геттер-функция (getInfo)
    function getInfo(){
        return "{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}";
    }

}
    $user1 = new User("Artyom", "123456", "artyom@mail.com", "Pushkin");
//    echo $user1->getInfo();

class DestructableClass{
    function __construct()
    {
        print "Конструктор";
        $this->name = "DestructableClass";
    }
    function __destruct()
    {
        print "Уничтожение ". $this->name;
    }
}

$obj = new DestructableClass();
//деструктор уничтожил объект после отработки скрипта