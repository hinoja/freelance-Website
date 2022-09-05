<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function freelances()
    {
        return $this->belongsToMany(Freelance::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }
}
