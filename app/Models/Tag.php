<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['tag'];

    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }

    public function freelances()
    {
        return $this->belongsToMany(Freelance::class);
    }
}
