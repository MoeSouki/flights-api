<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Passenger extends Model
{
    use HasFactory;
    protected $table = 'passengers';

    protected $guarded = [
        'first_name',
        'last_name',
        'email',
        'password',
        'date_of_birth',
        'passport_expiry_date',
    ];
    public function flights()
    {
        return $this->belongsToMany(Flight::class);
    }
}