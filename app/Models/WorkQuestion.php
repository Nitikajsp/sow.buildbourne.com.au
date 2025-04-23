<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkQuestion extends Model
{
    protected $table = 'work_questions';

    protected $fillable = [
        'questions_from_data'
    ];

    // Optional: Relationship with WorkGroup if needed
    public function workgroup()
    {
        return $this->belongsTo(WorkGroup::class, 'workgroup_id');
    }
}
