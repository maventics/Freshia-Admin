<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
            'fname',
            'lname',
            'email',
            'phone',
            'image',
            'dob',
            'year',
            'gender',
            'pronouns',
            'language',
            'client_source',
            'occupation',
            'country',
            'country_code',
            'additional_email',
            'additional_phone',
    ];
}
