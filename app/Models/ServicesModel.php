<?php declare(strict_types=1);

namespace App\Models;
use Core\Database\ActiveRecord;

class ServicesModel implements ActiveRecord {
    protected static string $table = "services";
    protected static array $columns = [
        'id',
        'client_id',
        'scheduled_delivery_date',
        'delivery_deadline',
        'delivered_at',
        'status',
        'non_delivered_note'
    ];

    protected static array $columnsToSync = [ 
        'id',
        'client_id',
        'scheduled_delivery_date',
        'delivery_deadline',
        'delivered_at',
        'status',
        'non_delivered_note'
    ];

    public int $client_id;
    public string $scheduled_delivery_date;
    public string $delivery_deadline;
    public ?string $delivered_at;
    public string $status;
    public ?string $non_delivered_note;

    public function __construct(array $args) {
        $this->client_id = $args['client_id'] ?? 0;
        $this->scheduled_delivery_date = $args['scheduled_delivery_date'] ?? '';
        $this->delivery_deadline = $args['delivery_deadline'] ?? '';
        $this->delivered_at = $args['delivered_at'] ?? null;
        $this->status = $args['status'] ?? 'pending';
        $this->non_delivered_note = $args['non_delivered_note'] ?? null;
    }

    public function validate() : bool {
        
        return true;
    }
}
