<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'rejistration_id',
        'amount',
    ];
    
    public function registration()
    {
        return $this->belongsTo(Rejistration::class);
    }

}
