<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class EmailModel extends Model
{
    use HasFactory;
    protected $table='email_models';
    protected $fillable=[
        'news',
        'wnews',
        'dnews',
        'snews',
        'mnews'
    ];
    public function bridgeToUser(){
        return $this->belongsTo(User::class);
    }
}
