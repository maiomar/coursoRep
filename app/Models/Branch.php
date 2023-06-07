<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_name',
        'branch_location',
        'institute_id', 
    ];


    public function Institute()
    {
        return $this->belongsTo(Institute::class);
    }

    
    public function course()
    {
       return $this->hasMany(course::class); 
    }


}
