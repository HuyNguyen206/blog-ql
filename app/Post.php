<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    //
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function topic():BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }
}
