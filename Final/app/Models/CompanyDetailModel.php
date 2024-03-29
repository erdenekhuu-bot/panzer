<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetailModel extends Model
{
    use HasFactory;
    protected $table='company_detail_models';
    protected $fillable=[
        'Begin_time',
        'End_Time',
        'Vertical',
        'Donate',
        'StartUp',
        'S1',
        'S2',
        'S3'
    ];
}
