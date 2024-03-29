<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $fillable=['role_id','head','content','blogger'];

    public function bridgeToUser(){
        return $this->belongsTo(User::class);
    }
    public function bridgeToRole(){
        return $this->belongsTo(Role::class);
    }
}
