<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable=['teamName'];
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function bridgeToUser(){
        return $this->belongsToMany(User::class,'company_teams');
    }
   
}
