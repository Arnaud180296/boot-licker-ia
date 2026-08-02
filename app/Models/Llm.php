<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable("name", "api_url", "provider", "is_active")]
class Llm extends Model
{
    //
    public function conversations():HasMany{
        return $this->hasMany(Conversation::class);
    }
}
