<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'party_id',  // Ensure this field exists in your database
        'work',  // Ensure this field exists in your database
        'status',
    ];

    // Relationships
    // Relationship with Party
    public function party()
    {
        return $this->belongsTo(Parties::class, 'party_id'); // Ensure the correct foreign key
    }


    public function project()
    {
        return $this->belongsTo(ListModel::class, 'project_id'); // Correct foreign key
    }



    public function workGroup()
    {
        return $this->belongsTo(WorkGroup::class);
    }
}
