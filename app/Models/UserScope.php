<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserScope extends Model
{

    use HasFactory;
    protected $fillable=[
        'scope_id',
        'user_id',
    ];
    protected $hidden=[
        'pivot'
    ];
}
