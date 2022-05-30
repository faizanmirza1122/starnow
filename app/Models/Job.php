<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function requiredExperience()
    {
        return $this->belongsTo(RequiredExpreience::class);
    }

    public function experienceLevel()
    {
        return $this->belongsTo(ExpreienceLevel::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function countries()
    {
        return $this->belongsTo(Country::class);
    }

    public function category(){
        return $this->belongsTo(JobCategory::class);
    }

    // save title as slug
    public function setTitleAttribute($value)
    {
        $this->attributes['slug'] = str_slug($value);
    }

    public function salaryRange()
    {
        return $this->belongsTo(SalaryRange::class);
    }
}
