<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'contact',
        'location',
        'area',
        'positions',
        'tasks',
        'size',
        'public'
    ];
}