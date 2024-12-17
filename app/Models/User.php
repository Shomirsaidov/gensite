<?php

namespace App\Models;

use App\Models\Poet;
use App\Models\Poem;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Subscription;
use App\Models\View;
use App\Models\Vocab;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
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
        'role'
    ];


    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function poems()
    {
        return $this->hasMany(Poem::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function views()
    {
        return $this->hasMany(View::class);
    }

    public function vocabulary()
    {
        return $this->hasMany(Vocab::class);
    }

    


    

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}