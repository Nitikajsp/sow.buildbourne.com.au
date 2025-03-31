<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListModel extends Model

{
    protected $table = 'project'; // Specify the correct table name

    protected $fillable = [

        'name',
        'house_number',
        'suburb',
        'state',
        'pincode',
        'description',
        'contact_number',
        'contact_email',
        'builder_name',
        'status',
        'product_name',
        'customer_id',
        'parties_id',
    ];

    public function projects()

    {
        return $this->hasMany(Project::class, 'id', 'id');
    }

    public function orders()

    {
        return $this->hasMany(Order::class, 'list_id');
    }
}
