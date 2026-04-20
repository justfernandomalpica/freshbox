<?php declare(strict_types=1);

namespace App\Middleware;

class UseAuth {
    public static function handle(array $params) {
        debug($params,false);
        debug("Using 1'UseAuth' Middleware");
    }
}