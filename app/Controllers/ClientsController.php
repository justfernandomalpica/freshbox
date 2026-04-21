<?php declare(strict_types=1);

namespace App\Controllers;

use Core\Response;

class ClientsController {
    public static function create() {
        Response::success('Desde ClientsController::create()');
    }
    public static function read($params) {
        Response::success(['Desde ClientsController::read()',$_SERVER["PATH_INFO"], $params]);
    }
    public static function update() {
        Response::success('Desde ClientsController::update()');
    }
    public static function delete() {
        Response::success('Desde ClientsController::delete()');
    }
}