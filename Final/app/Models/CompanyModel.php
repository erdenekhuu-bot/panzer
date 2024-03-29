<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyModel extends Model
{
    use HasFactory;

    protected $table='company_models';
    protected $fillable=[
        'CompanyName',
        'CompanyWeb',
        'Location',
        'Logo',
        'Wallpaper',
        'Gallery',
        'Definition',
        'LongDefinition',
        'Website',
        'Linkedin',
        'Twitter',
        'Facebook'
    ];
}
