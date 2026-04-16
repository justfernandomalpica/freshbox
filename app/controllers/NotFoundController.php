<?php declare(strict_types=1);

namespace App\Controllers;

use Core\Response;

class NotFoundController {
    public static function index() {
        Response::error('Contenido no encontrado',404);
    }
}