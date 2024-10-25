<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlackWatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'blackwatch_id',
        'name',
        'gender',
        'initial',
        'rank',
        'role',
        'status',
        'image'
    ];
}
