<?php declare(strict_types=1);

namespace App\Models;
use Core\Database\ActiveRecord;

class ServiceProductsModel implements ActiveRecord {
    protected static string $table = "service_products";
    protected static array $columns = [
        'id',
        'service_id',
        'product_id'
    ];

    protected static array $columnsToSync = ['id', 'service_id', 'product_id'];

    public int $service_id;
    public int $product_id;

    public function __construct(array $args) {
        $this->service_id = $args['service_id'] ?? 0;
        $this->product_id = $args['product_id'] ?? 0;
    }

    public function validate() : bool {
        
        return true;
    }
}
