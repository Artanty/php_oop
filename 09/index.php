<?php
//наследование - это определение класса, который имеет все те же свойства и методы,
// что и базовый(родительский) класс. Говорят, что дочерний класс расширяет родительский.
//Ключевое слово extend
//Каждый дочерний класс вызывает конструктор родительского класса перед тем, как определить свой свойства
//Дочерние классы - это обычно специализация родительских классов
//Следует избегать того, чтобы давать родительскому классу какие-либо особые знания о дочерних классах
//protected - область видимости, которую определяет этот спецификатор, означает, что свойства и методы
//могут использоваться только внутри самого класса и внутри дочернего класса
//При написании метода можно явно запретить его переопределение в дочерних классах - final
//Можно запретить наследование класса -  ставим final перед определением класса final class User




//наследование protected
class Test {
    protected $info;
}
class Test2 extends Test {
    public function test(){
        $this->info = "info";
        echo $this->info;
    }
}
$test2 = new Test2();
$test2->test();



//Наследование
class User
{
    public $name;
    public $password;
    public $email;
    public $city;

    function __construct($name,$password,$email,$city)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }

    function getInfo(){
        $information = "{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}";
        return $information;
    }
}

$user1 = new User("Allex","3434","www@mail.ru","Kiev");
//echo $user1->getInfo();

class Moderator extends User {
    public $info;
    public $rights;

    public function __construct($name, $password, $email, $city,$info,$rights)
    {
        parent::__construct($name, $password, $email, $city);
        $this->info = $info;
        $this->rights = $rights;
    }
    function getInfo(){
        $information = parent::getInfo();//получаем из гланого класса эту функцию
        $information .= "{$this->info}"."{$this->rights}";//добавляем к ней значения
        return $information;
    }
//    function hello()
//    {
//        echo 'Moderator is here';
//    }
}
$moder = new Moderator("Oleg","rrr","rr@mai.ru","Vologda","Moderator",true);
//echo $moder->hello();
//echo $moder->getInfo();