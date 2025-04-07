<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'suburb',
        'state',
        'pincode',
        'description', // Add this line
        'contact_number',
        'contact_email',
        'builder_name',
        'status',
        'parties_id',
        'created_at',
        'updated_at',




    ];
}
