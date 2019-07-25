<?php

namespace App\teacher;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
}
