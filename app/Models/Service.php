<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';

    protected $fillable = [
        'icon',
        'cover',
        'data',
        'name',
        'pricing',
        'publish'
    ];


    protected $casts = [
        'data' => 'array',
        'pricing' => 'array',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
    ];
}
