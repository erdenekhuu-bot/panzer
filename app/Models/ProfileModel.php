<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class ProfileModel extends Model
{
    use HasFactory;
    protected $table='profile_models';
    protected $fillable=[
        'fullName',
        'Image',
        'headLine',
        'dropDown',
        'unknown',
        'textArea',
        'website',
        'linkedin',
        'twitter',
        'facebook'
    ];
    public function bridgeToUser(){
        $this->belongsTo(User::class);
    }
}
