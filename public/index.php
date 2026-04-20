<?php declare(strict_types=1);

use App\Controllers\ClientsController;
use App\Controllers\IndexController;
use App\Controllers\PackagingController;
use App\Controllers\PlansController;
use App\Controllers\ProductsController;
use App\Controllers\ServicesController;
use App\Middleware\UseAuth;

require realpath(dirname(__DIR__) . "/config/app.php");

// Landpage
$router->get("/",[IndexController::class,"index"])->name('Landpage');

// API
$router->get("/clients",[ClientsController::class, "read"])->name('clients.getAll');
$router->post("/clients", [ClientsController::class, "create"])->name('client.create');
$router->get("/clients/{id}",[ClientsController::class, "read"])->name('clients.getById')->where('id','\d+');
$router->put("/clients/{id}",[ClientsController::class, "update"])->name('clients.update')->where('id','\d+')->middleware(UseAuth::class);
$router->delete("/clients/{id}",[ClientsController::class, "delete"])->name('clients.delete')->where('id','\d+')->middleware(UseAuth::class);

$router->get("/plans",[PlansController::class, "read"])->name('plans.getAll');
$router->post("/plans", [PlansController::class, "create"])->name('client.create');
$router->get("/plans/{id}",[PlansController::class, "read"])->name('plans.getById')->where('id','\d+');
$router->put("/plans/{id}",[PlansController::class, "update"])->name('plans.update')->where('id','\d+')->middleware(UseAuth::class);
$router->delete("/plans/{id}",[PlansController::class, "delete"])->name('plans.delete')->where('id','\d+')->middleware(UseAuth::class);

$router->get("/services",[ServicesController::class, "read"])->name('services.getAll');
$router->post("/services",[ServicesController::class, "create"])->name('services.create');
$router->get("/services/{id}",[ServicesController::class, "read"])->name('services.getById')->where('id','\d+');
$router->put("/services/{id}",[ServicesController::class, "update"])->name('services.update')->where('id','\d+')->middleware(UseAuth::class);
$router->patch("/services/{id}",[ServicesController::class, "update"])->name('services.status.update')->where('id','\d+')->middleware(UseAuth::class);
$router->delete("/services/{id}",[ServicesController::class, "delete"])->name('services.delete')->where('id','\d+')->middleware(UseAuth::class);

$router->get("/products",[ProductsController::class, "read"])->name('products.getAll');
$router->post("/products", [ProductsController::class, "create"])->name('client.create');
$router->get("/products/{id}",[ProductsController::class, "read"])->name('products.getById')->where('id','\d+');
$router->put("/products/{id}",[ProductsController::class, "update"])->name('products.update')->where('id','\d+')->middleware(UseAuth::class);
$router->delete("/products/{id}",[ProductsController::class, "delete"])->name('products.delete')->where('id','\d+')->middleware(UseAuth::class);

$router->get("/package/{service_id}",[PackagingController::class, "read"])
    ->name('package.getByServiceId')
    ->where('service_id','\d+')
;
$router->post("/package/{service_id}/{product_id}",[PackagingController::class, "update"])
    ->name('package.addProduct')
    ->where(['service_id','product_id'],'\d+')
    ->middleware(UseAuth::class)
;
$router->delete("/package/{service_id}/{product_id}",[PackagingController::class, "delete"])
    ->name('package.delete')
    ->where(['service_id','product_id'],'\d+')
    ->middleware(UseAuth::class)
;

$router->dispatch();