<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rejistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'course_id',
        'accepted',
    ];

    public function course()
    {
        return $this->belongsTo(course::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }



}
