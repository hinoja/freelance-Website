<?php

namespace App\Models;

use App\Models\Freelance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;
    public function freelances()
    {
        return $this->belongsToMany(Freelance::class);
    }

}
