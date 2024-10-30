<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tforce141 extends Model
{
    use HasFactory;

    protected $fillable = [
        'taskforce_id',
        'name',
        'gender',
        'initial',
        'rank',
        'role',
        'status',
        'image'
    ];
}
