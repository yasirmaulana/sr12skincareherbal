<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkincarePhoto extends Model
{
    protected $fillable = [
        'photo',
        'skincare_id',
    ];
}
