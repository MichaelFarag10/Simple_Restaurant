<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'email',
        'user_id',
        'phone',
        'guest',
        'date',
        'time',
        'message',

    ];
}
