<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;
    protected $table='нүүр_хэсэг';
    protected $fillable=['стартап','Тухай','Чиглэл',
                         'БайгуулагдсанОн','БайгууллагынСайт',
                         'БайгууллагынМэйл','ХолбогдохУтас'];
}
