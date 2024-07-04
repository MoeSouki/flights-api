<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $table = 'flights';

    protected $guarded = [
        'number',
        'departure_city',
        'arrival_city',
        'departure_time',
        'arrival_time',
    ];
}