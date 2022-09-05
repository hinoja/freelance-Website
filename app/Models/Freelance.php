<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelance extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function links()
    {
        return $this->hasMany(Links::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }
}
