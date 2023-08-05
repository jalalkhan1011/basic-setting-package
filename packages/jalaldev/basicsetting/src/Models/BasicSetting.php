<?php

namespace Jalaldev\Basicsetting\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'mobile',
        'email',
        'address',
        'footer'
    ];
}
