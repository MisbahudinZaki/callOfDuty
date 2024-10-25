<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usranger extends Model
{
    use HasFactory;

    protected $fillable = [
        'ranger_id',
        'name',
        'gender',
        'rank',
        'role'
    ];
}
