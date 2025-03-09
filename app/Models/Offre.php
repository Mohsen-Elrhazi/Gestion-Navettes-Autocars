<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_city',
        'end_city',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'available_seats',
        'total_seats',
        'description',
        'user_id'
    ];

    public function societe(){
        return $this->belongsTo(Societe::class,"user_id");
    }
}