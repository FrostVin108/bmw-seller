<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasOne;

class buyer extends Model
{
    protected $table = 'buyer';
    protected $primaryKey = 'id';

    protected $fillable = [
        'buyer_name',
        'plat_number',
        'car_id',
    ];

    public function car(): BelongsTo
    {
        return $this->belongsTo(car::class, 'car_id', 'id');
    }
}
