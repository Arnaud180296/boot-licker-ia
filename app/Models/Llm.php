<?php

namespace App\Models;

use Database\Factories\LlmFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;

#[Fillable("name", "api_url", "provider", "is_active")]
#[UseFactory(LlmFactory::class)]
class Llm extends Model
{
    //
    use HasFactory;

    public function conversations():HasMany{
        return $this->hasMany(Conversation::class);
    }
}
