<?php

namespace App\Models;

use App\Models\Freelance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Link extends Model
{
    use HasFactory;
    public function freelances()
    {
        return $this->belongsTo(Freelance::class);
    }
}
