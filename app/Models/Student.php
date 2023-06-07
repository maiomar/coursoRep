<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'student_id',
        'name_stedent',
        'last_name',
        'momile_phone',
        'email',
        'birth_date',
        'gender',
        'nationality',
        'Address',
        'social_situation',
        'educcational_attainment'
    ];

    public function rejrstration()
    {
        return $this->hasMany(Rejistration::class);
    }

    public function suugestions()
    {
        return $this->hasMany(Suggestions::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
