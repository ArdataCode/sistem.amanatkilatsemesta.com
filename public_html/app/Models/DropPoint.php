<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DropPoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'no',
        'city',
        'address',
        'status',
    ];

}