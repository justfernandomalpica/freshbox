<?php declare(strict_types=1);

namespace App\Models;
use Core\Database\ActiveRecord;

class ClientsModel extends ActiveRecord {
    protected static string $table = "clients";
    protected static array $columns = [
        'id', 
        'name', 
        'last_name', 
        'email',
        'street',
        'street_number',
        'city',
        'state',
        'zip',
        'country',
        'active_plan_id',
        'plan_start_date'
    ];
    
    protected static array $columnsToSync = ['id', 'name', 'last_name', 'email', 'street', 'street_number', 'city', 'state', 'zip', 'country', 'active_plan_id', 'plan_start_date'];

    public string $name; 
    public string $last_name; 
    public string $email;
    public string $street;
    public string $street_number;
    public string $city;   
    public string $state;
    public string $zip;
    public string $country;
    public ?int $active_plan_id;
    public ?string $plan_start_date;

    public function __construct(array $args) {
        $this->name = $args['name'] ?? '';
        $this->last_name = $args['last_name'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->street = $args['street'] ?? '';
        $this->street_number = $args['street_number'] ?? '';
        $this->city = $args['city'] ?? '';
        $this->state = $args['state'] ?? '';
        $this->zip = $args['zip'] ?? '';
        $this->country = $args['country'] ?? '';
        $this->active_plan_id = $args['active_plan_id'] ?? null;
        $this->plan_start_date = $args['plan_start_date'] ?? null;
    }

    public function validate() : bool {
        
        return true;
    }
}