<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Passenger extends Model
{
    use HasFactory, SoftDeletes; // soft deletes allows you to mark records as deleted without actually removing them from the database.
    protected $table = 'passengers';

    protected $guarded = [
        'first_name',
        'last_name',
        'email',
        'password',
        'date_of_birth',
        'passport_expiry_date',
    ];
    // a type of security vulnerability that occurs when an application code allows user-provided
    // data to be used to set properties on an object without verifying that the user has the right to do so.
}