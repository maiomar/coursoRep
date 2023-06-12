<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDay extends Model
{
    use HasFactory;

    public function course()
    {
       return $this->belongsTo(course::class);
    }

    public function Day()
    {
       return $this->belongsTo(Day::class);
    }
    


}
