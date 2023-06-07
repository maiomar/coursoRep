<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class course extends Model
{
    use HasFactory;





    protected $fillable = [
        'branch_id',
        'course_name',
        'cost',
        'course_type',
        'course_classification',
        'course_startdate',
        'course_enddate',
        'course_days',
    ];

    public function branch()
    {
       return $this->belongsTo(Branch::class);
    }


    public function coursesyllbuse()
    {
        return $this->hasMany(courseSyllabus::class);
    }

    public function rejistre()
    {
        return $this->hasMany(Rejistration::class);
    }


    public function teachercourse()
    {
        return $this->hasMany(CourseTeachers::class);
    }

    public function instutes()
    {
       return $this->belongsTo(Institute::class);
    }



}
