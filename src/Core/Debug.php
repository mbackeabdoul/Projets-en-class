<?php

class Debug
{
    private function __construct(){}
    
    public static function vardump(mixed $data)
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        die;
    }
}