<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
