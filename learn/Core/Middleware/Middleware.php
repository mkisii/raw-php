<?php

namespace  Core\Middleware;

use Exception;

class Middleware {
    public const MAP = [
        'auth' => Auth::class,
        'guest' =>Guest::class
    ];

    public static function resolve($key) {

        if(!$key) {
            return;
        }

        $middleware = static::MAP[$key] ?? false;


        if(!$middleware){
            throw new Exception(`No matching middleware key  found with that name '{$key}'.`);
        }
       
        (new $middleware)->handle();

    }
}