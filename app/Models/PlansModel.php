<?php declare(strict_types=1);

namespace App\Models;
use Core\Database\ActiveRecord;

class PlansModel implements ActiveRecord {
    protected static string $table = "plans";
    protected static array $columns = [
        'id',
        'name',
        'price',
        'included_product_qty'
    ];

    protected static array $columnsToSync = ['id', 'name', 'price', 'included_product_qty'];

    public string $name;
    public float $price;
    public int $included_product_qty;

    public function __construct(array $args) {
        $this->name = $args['name'] ?? '';
        $this->price = $args['price'] ?? 0;
        $this->included_product_qty = $args['included_product_qty'] ?? 0;
    }

    public function validate() : bool {
        
        return true;
    }
}