<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Idea extends Model
{
    protected $fillable = ["note", 'user_id'];

    // Getting user for the idea
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
