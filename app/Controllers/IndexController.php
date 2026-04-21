<?php declare(strict_types=1);

namespace App\Controllers;

class IndexController {
    public static function index() {
        htmlRes("<h1>Hola mundo desde Index Controller</h2>");
    }
}