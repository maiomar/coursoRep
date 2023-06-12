<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rejistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'course_id',
        'accepted',
    ];

    public function course()
    {
        return $this->belongsTo(course::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }



}
