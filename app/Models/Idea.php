<?php

namespace App\Models;

use App\Enums\IdeaState;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Idea extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'state' => IdeaState::pending,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
