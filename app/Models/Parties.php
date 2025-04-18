<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parties extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'street',
        'suburb',
        'pincode',
        'state',
        'part_type',
        'choose_your_work_type',
        'delete_status',
    ];


    public function lists()
    {
        return $this->hasMany(ListModel::class)->where('delete_status', 0);
    }


    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    public function scopeActive($query)
    {
        return $query->where('delete_status', 1);
    }
}
