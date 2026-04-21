<?php declare(strict_types=1);

namespace App\Controllers;

use Core\Response;

class PlansController {
    public static function create() {
        Response::success('Desde PlansController::create()');
    }
    public static function read($params) {
        Response::success(['Desde PlansController::read()',$_SERVER["PATH_INFO"], $params]);
    }
    public static function update() {
        Response::success('Desde PlansController::update()');
    }
    public static function delete() {
        Response::success('Desde PlansController::delete()');
    }
}