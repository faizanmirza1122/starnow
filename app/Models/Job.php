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
        return $this->hasOne(RequiredExpreience::class);
    }

    public function experienceLevel()
    {
        return $this->hasOne(ExpreienceLevel::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function countries()
    {
        return $this->hasMany(Country::class);
    }
}
