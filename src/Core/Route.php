<?php
class Router{
    private array $routes = [];

    public function __construct()
    {
        $this->routes = [
            '/' => [
                'controller' => '\Controller\EleveController',
                'action' => 'index'
            ]

        ];
    }
}