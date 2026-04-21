<?php declare(strict_types=1);

namespace App\Models;
use Core\Database\ActiveRecord;

class ProductsModel extends ActiveRecord {
    protected static string $table = "products";
    protected static array $columns = [
        'id',
        'name',
        'qty_unit',
        'stock',
        'min_qty'
    ];

    protected static array $columnsToSync = ['id', 'name', 'qty_unit', 'stock', 'min_qty'];

    public string $name;
    public string $qty_unit;
    public float $stock;
    public float $min_qty;

    public function __construct(array $args) {
        $this->name = $args['name'] ?? '';
        $this->qty_unit = $args['qty_unit'] ?? '';
        $this->stock = $args['stock'] ?? 0;
        $this->min_qty = $args['min_qty'] ?? 0;
    }

    public function validate() : bool {
        
        return true;
    }
}