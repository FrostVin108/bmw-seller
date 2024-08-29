<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $table = 'car';
    protected $primaryKey = 'id';

    protected $fillable = [
        'car_name',
        'car_year',
    ];
}
