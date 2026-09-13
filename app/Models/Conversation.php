<?php

namespace App\Models;

use Database\Factories\ConversationFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(["title", "user_id", "llm_id"])]

#[UseFactory(ConversationFactory::class)] // Pas utile mais plus clair pour moi
class Conversation extends Model
{
    //
    use HasFactory;

    public function messages():HasMany{
        return $this->hasMany(Message::class);
    }

    //
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function llm():BelongsTo{
        return $this->belongsTo(Llm::class);
    }

}
