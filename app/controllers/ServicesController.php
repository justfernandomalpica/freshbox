<?php declare(strict_types=1);

namespace App\Controllers;

use Core\Response;

class ServicesController {
    public static function create() {
        Response::success('Desde ServicesController::create()');
    }
    public static function read($params) {
        Response::success(['Desde ServicesController::read()',$_SERVER["PATH_INFO"], $params]);
    }
    public static function update() {
        Response::success('Desde ServicesController::update()');
    }
    public static function delete() {
        Response::success('Desde ServicesController::delete()');
    }
}