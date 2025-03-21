<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'work',
        'status',
    ];

    // Relationships
    public function party()
    {
        return $this->belongsTo(Parties::class);
    }

    public function workGroup()
    {
        return $this->belongsTo(WorkGroup::class);
    }
}
