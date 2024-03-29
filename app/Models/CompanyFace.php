<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyFace extends Model
{
    use HasFactory;

    protected $table='тус_бүр_ороход_байх_мэдээлэл';
    protected $fillable=['стартап','Тухай','Чиглэл',
                         'БайгуулагдсанОн','БайгууллагынСайт',
                         'БайгууллагынМэйл','ХолбогдохУтас'];
}
