<?php

//1.All settings
//Времееное отображение ошибок, потом нужно удалить будет.
ini_set("display_errors",1);
error_reporting(E_ALL);

//2.Подключение файлов проекта

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/Component/Router.php');

//3. Установка соединения с БД

//4. Вызов Router
    $router = new Router();
    $router->Run();