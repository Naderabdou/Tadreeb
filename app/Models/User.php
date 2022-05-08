<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'city_id',
        'gender',
        'role',
        'Privacy_policy',
        'phone',
        'img',
        'qualification',
        'Employment',
        'Specialization'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'pivot'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function scopes()
    {
        return $this->belongsToMany(ScopesAdmin::class, 'user_scopes', 'user_id', 'scope_id');
    }

    public function courses()
    {
        return $this->hasMany(Courses::class, 'instructor_id');
    }
    public function receivesBroadcastNotificationsOn(){
        return 'App.Models.User.'.$this->id;
    }
    public function cv()
    {
        return $this->hasOne(CV::class, 'instructor_id');

    }
    public function course(){
        return $this->belongsToMany(Courses::class, 'user__courses','user_id','course_id');
    }
    public function alerts(){
        return $this->hasMany(Alert::class,'instructor_id');

    }
    public function lessons(){
        return $this->belongsToMany(Lesson::class,'user__lessons','user_id','lesson_id');
    }
    public function Answer(){
        return $this->hasMany(Exam_Answer::class, 'user_id');
    }
    public  function rates(){
        return $this->hasMany(Rate::class, 'user_id');
    }


}
