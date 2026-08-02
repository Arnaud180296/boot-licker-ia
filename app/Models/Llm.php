<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Llm extends Model
{
    //
    public function conversations():HasMany{
        return $this->hasMany(Conversation::class);
    }
}
