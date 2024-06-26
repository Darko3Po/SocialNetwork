<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    use HasFactory;

    const TABLE = 'friends';

    protected $table = self::TABLE;

    protected $fillable = [
        'user_id',
        'friend',
    ];

}
