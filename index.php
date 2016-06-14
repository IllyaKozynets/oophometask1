<?php
use Classes\Planet;

define('DS', DIRECTORY_SEPARATOR);
define('CD', __DIR__ . DS);

spl_autoload_extensions('.php');
set_include_path(CD . 'interfaces');
set_include_path(CD . 'classes');
spl_autoload_register();

$upiter=new Planet('Upiter',44444,999);
$venera=new Planet('Venera',44312,444);
$add=new \Classes\PlanetList();
$add->add($upiter);
$add->add($venera);
print_r($add->getList());
print_r($add->getCounts());
