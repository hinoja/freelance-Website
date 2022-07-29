<?php

namespace App\Models;

use App\Models\User;
use App\Models\Conversation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class conversarions extends Model
{
    use HasFactory;
    public function conversations()
    {
        return $this->belongsTo(Conversation::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
