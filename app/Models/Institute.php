<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;

    protected $fillable = [
      'institute_name',
      'institute_location',
      'email',
      'phone',
  ];

    




    public function course()
    {
      return $this->hasMany(course::class);
    }

    //public function location()
     //{
       //return $this->belongsTo(Location::class);
     // }




}
