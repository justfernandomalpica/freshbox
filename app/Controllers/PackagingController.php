<?php declare(strict_types=1);

namespace App\Controllers;

use Core\Response;

class PackagingController {
    public static function create() {
        Response::success('Desde PackagingController::create()');
    }
    public static function read($params) {
        Response::success(['Desde PackagingController::read()',$_SERVER["PATH_INFO"], $params]);
    }
    public static function update() {
        Response::success('Desde PackagingController::update()');
    }
    public static function delete() {
        Response::success('Desde PackagingController::delete()');
    }
}