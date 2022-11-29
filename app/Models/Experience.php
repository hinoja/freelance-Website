<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $guarded = [];

    public function freelances()
    {
        return $this->belongsTo(Freelance::class);
    }
}
