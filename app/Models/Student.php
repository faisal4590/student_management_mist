<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class,
            'teacher_students',
        'student_id',
        'teacher_id');
    }
}
