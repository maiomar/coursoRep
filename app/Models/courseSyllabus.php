<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courseSyllabus extends Model
{
    use HasFactory;

    protected $fillable = [
        'cours_id',
        'course_subject',
        'course_hourse',
       
    ];

    public function course()
    {
       return $this->belongsTo(course::class);
    }

    

}
