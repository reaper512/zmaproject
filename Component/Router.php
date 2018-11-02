<?php
/**
 Описание класса Router и сопутствующего.
 */
class Router{
    private $routes;

    public function _construct(){
        //Занесение в переменную массива routes;
        $routesPath = ROOT.'/Config/Routes.php';

        $this->routes = include($routesPath);
    }

    /**
     * Method return string request.
     * @return string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            //Заносим в переменную запрос
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function Run()
    {

        $uri = $this->getURI();
        echo $uri;


        //Проверяем строку запроса

        foreach($this->routes as $uriPattern => $path)
        {
                if(preg_match("~$uriPattern~", $uri)){
                    echo '+';
                }
        }


    }
}