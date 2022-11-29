<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class freelance_job extends Model
{
    use HasFactory;

    protected $guarded = [];
    // use SoftDeletes;

    protected $table = 'freelance_job';
    public $timestamps=true;


}
