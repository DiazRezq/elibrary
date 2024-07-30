<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'gender',
        'address',
        'birthday',
        'phone',
        'email',
        'password',
        'image',
    ];
}
