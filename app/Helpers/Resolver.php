<?php

namespace App\Helpers;

class Resolver  
{
    public $namespace = "\App\Http\Resources\\";

    public function resolve($class, $method, $model)
    {
        if(is_object($class)) {
            return $class;
        }
        if(! class_exists($class)) {
            $class = $this->namespace.$class;
        }
        return (new $class($model))->$method($model);
    }
}