<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delta extends Model
{
    use HasFactory;
    protected $fillable = [
        'delta_id',
        'name',
        'gender',
        'rank',
        'role'
    ];
}
