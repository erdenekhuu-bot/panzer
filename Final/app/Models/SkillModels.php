<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class SkillModels extends Model
{
    use HasFactory;
    protected $table='skill_models';
    protected $fillable=[
        'Company',
        'Role',
        'start_month',
        'start_year',
        'end_month',
        'end_year',
        'status'
    ];
    public function bridgeToUser(){
        $this->belongsTo(User::class);
    }
}
