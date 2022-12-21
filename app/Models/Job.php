<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Status;
use App\Models\Category;
use App\Models\freelance_jobs;
use App\Models\Requirement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    protected $guarded = [];

    use HasFactory;
    use Notifiable;
    // use SoftDeletes;

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
    public function isFreelanceHasApplysJob()
    {
        foreach ($this->freelances as $freelance) {

            if ($freelance::Where('id', Auth::user()->userable->id)->first())
                return true;
            else return false;
        }
    }
    public function isSelected($freelanceId)
    {
        if (freelance_jobs::where('job_id', $this->id)->where('is_hired', 1)->where('freelance_id', $freelanceId)->first())
            return true;
        else false;
    }
}
