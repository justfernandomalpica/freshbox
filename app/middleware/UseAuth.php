<?php declare(strict_types=1);

namespace App\Middlewares;

class UseAuth {
    public static function execute() {
        debug("Using 'UseAuth' Middleware");
    }
}