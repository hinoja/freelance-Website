<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }

    public function statuses()
    {
        return $this->belongsToMany(Status::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function freelances()
    {
        return $this->belongsToMany(Freelance::class);
    }

    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }
}
