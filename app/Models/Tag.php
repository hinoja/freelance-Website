<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }

    public function freelances()
    {
        return $this->belongsToMany(Freelance::class);
    }
}
