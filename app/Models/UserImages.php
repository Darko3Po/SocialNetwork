<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserImages extends Model
{
    use HasFactory;

    const TABLE = 'user_images';

    protected $fillable = [
        'image',
        'user_id',
    ];


}
