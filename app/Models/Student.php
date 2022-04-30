<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function filiere(): BelongsTo
    {
        return $this->belongsTo(Filiere::class);
    }


    public function note(): HasMany
    {
        return $this->hasMany(Note::class);
    }
}
