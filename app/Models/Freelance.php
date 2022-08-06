<?php

namespace App\Models;

use App\Models\Job;
use App\Models\Tag;
use App\Models\Link;
use App\Models\User;
use App\Models\Experience;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Freelance extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }


}
