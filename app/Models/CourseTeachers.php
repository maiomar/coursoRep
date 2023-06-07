<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTeachers extends Model
{
    use HasFactory;

    public function teacher()
    {
         return $this->belongsTo(Teacher::class);
    }

    public function  course()
    {
        return $this->belongsTo(course::class);
    }
    
}
