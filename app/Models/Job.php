<?php

namespace App\Models;

use App\Models\Freelance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    protected $guarded = [];

    use HasFactory;
    use SoftDeletes;

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
    public function likes()
    {
        return $this->belongsToMany(Freelance::class);
    }
    public function isLiked()
    {
        if(auth()->check()){
            return auth()->user()->userable->likes()->contains('id',$this->id);
        }
    }

}
