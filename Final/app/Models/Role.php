<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table='roles';
    protected $fillable=['user_id','head','content','blogger'];

    public function bridgeToUser(){
        return $this->belongsTo(User::class);
    }
    public function forwardToPost(){
        return $this->hasMany(Post::class);
    }
    public function retriveFromPost(){
        return $this->belongsTo(Post::class);
    }
}