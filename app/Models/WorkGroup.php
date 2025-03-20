<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_name',
    ];

    public function questions()
    {
        return $this->hasMany(WorkQuestion::class, 'workgroup_id');
    }
}
