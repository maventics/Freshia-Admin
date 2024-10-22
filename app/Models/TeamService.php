<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamService extends Model
{
    use HasFactory;

    protected $fillable = ['team_id','service_id'];
}
