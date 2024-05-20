<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FriendRequests extends Model
{
    use HasFactory;

    const TABLE = 'friend_requests';
    protected $table = self::TABLE;

    protected $fillable = [
        'user_id',
        'friend',
        'status',
    ];

}
