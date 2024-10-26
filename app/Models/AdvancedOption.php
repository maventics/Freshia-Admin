<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvancedOption extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'user_id',
        'location_id',
        'duration',
        'price_type',
        'price'
    ];

}
