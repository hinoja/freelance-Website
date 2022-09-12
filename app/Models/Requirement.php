<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Requirement extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'job_id'];

    public function jobs()
    {
        return $this->belongsTo(Job::class);
    }
}
