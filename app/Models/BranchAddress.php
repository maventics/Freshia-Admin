<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_name',
        'branch_address',
    ];
}