<?php declare(strict_types=1);

use App\Controllers\ClientsController;
use App\Middlewares\UseAuth;

require realpath(dirname(__DIR__). "/config/app.php");

// Clients
$router->get("/clients",[ClientsController::class, "read"])->name('clients.getAll');
$router->post("/clients", [ClientsController::class, "create"])->name('client.create');
$router->get("/clients/{id}",[ClientsController::class, "read"])->name('clients.getById')->where('id','\d+');
$router->put("/clients/{id}",[ClientsController::class, "update"])->name('clients.update')->where('id','\d+')->middleware([UseAuth::class,"execute"]);
$router->delete("/clients/{id}",[ClientsController::class, "delete"])->name('clients.delete')->where('id','\d+')->middleware([UseAuth::class,"execute"]);



$router->dispatch();