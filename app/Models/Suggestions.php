<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestions extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'suggested_course',

    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

}
