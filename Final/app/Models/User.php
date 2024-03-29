<?php

namespace App\Models;

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
    ];

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
        'password' => 'hashed',
    ];
    public function bridgeToProfile(){
        return $this->hasOne(ProfileModel::class);
    }
    public function bridgeToSkill(){
        return $this->hasMany(SkillModels::class);
    }
    public function bridgeToEmail(){
        return $this->hasOne(EmailModel::class);
    }
    public function bridgeToCompany(){
        return $this->hasMany(CompanyModel::class);
    }
    public function bridgeToCompanyDetail(){
        return $this->hasMany(CompanyDetailModel::class);
    }
    public function addTeam(){
        return $this->hasMany(Team::class);
    }
    public function bridgeToTeam(){
        return $this->belongsToMany(Team::class,'company_teams');
    }
    public function bridgeToPost(){
        return $this->hasManyThrough(Post::class,Role::class);
    }
    public function crossOverRole(){
        return $this->hasMany(Role::class);
    }
}
