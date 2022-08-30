<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Requirement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
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
