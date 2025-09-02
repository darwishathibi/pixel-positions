<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    //an employer belongs to a user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // an employer has many jobs
    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }
}
