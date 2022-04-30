<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cour(): BelongsTo
    {
        return $this->belongsTo(Cour::class);
    }


    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
