<?php

namespace App\Models;

use AwStudio\DynamicAttributes\HasDynamicAttributes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, HasDynamicAttributes;

    protected $fillable = [
        'title'
    ];
}
