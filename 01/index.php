<?php

require_once 'classes/FirstClass.php';

$o1 = new FirstClass();
$o2 = new FirstClass();
//$o1 = 'dd';
//для того, чтобы создать экземпляр класса - используем слово new
var_dump($o1);
var_dump($o2);