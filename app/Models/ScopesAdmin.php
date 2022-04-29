<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScopesAdmin extends Model
{
    use HasFactory;
    protected $fillable=[
        'name'
    ];
    public function users(){
        return $this->belongsToMany(User::class,'user_scopes','user_id','scope_id',
            'id','id');
    }
    public function courses(){
        return $this->hasMany(Courses::class,'Scope_id');
    }

    protected $hidden=[
        'pivot'
    ];

}
