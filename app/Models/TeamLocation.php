<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TeamLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'location_id'
    ];
}
