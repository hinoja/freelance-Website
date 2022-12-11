<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    // use SoftDeletes;
    use Notifiable;

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function jobs()
    {
        return  $this->hasMany(Job::class);
    }
}
