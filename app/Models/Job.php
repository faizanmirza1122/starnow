<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;
class Job extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'expire_in' => 'date',
    ];

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
        return $this->belongsTo(JobCategory::class, 'job_category_id');
    }

    public function salaryRange()
    {
        return $this->belongsTo(SalaryRange::class);
    }

    public function workerRoles()
    {
        return $this->belongsToMany(WorkerRole::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
