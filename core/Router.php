<?php

namespace app\core;

class Router
{
    protected array $toutes = [];
    public function get($path,$callback)
    {
        $this->routes['get'][$path] = $callback; 
    }

    public function resolce()
    {
        echo '<pre>';
        var_dump($_SERVER);
        echo '</pre>';
        exit;
    }

}