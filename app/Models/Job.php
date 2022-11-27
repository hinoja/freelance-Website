<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Status;
use App\Models\Category;
use App\Models\Requirement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }

    public function statuses()
    {
        return $this->belongsToMany(Status::class)->withTimestamps();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function freelances()
    {
        return $this->belongsToMany(Freelance::class)->withTimestamps();
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function states()
    {
        return $this->belongsToMany(State::class)->withTimestamps();
    }
}
