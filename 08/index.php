<?php
//static, self::
class User{

    private static $name;

    public static function setName($name1){
        self::$name = $name1;
    }
    public static function getName()
    {
        return self::$name;
    }

}

User::setName('Ivan');
echo User::getName();
