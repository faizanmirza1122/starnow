<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function workerRoles()
    {
        return $this->belongsToMany(WorkerRole::class);
    }

    public function height(){
        return $this->hasOne(Height::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
