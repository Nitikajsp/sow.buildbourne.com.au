<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkQuestion extends Model
{
    protected $table = 'work_questions';

    protected $fillable = [
        'workgroup_id',
        'question_title',
        'question_value',
        'description'
    ];

    // Optional: Relationship with WorkGroup if needed
    public function workgroup()
    {
        return $this->belongsTo(WorkGroup::class, 'workgroup_id');
    }
}
