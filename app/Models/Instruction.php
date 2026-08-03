<?php

namespace App\Models;

use Database\Factories\InstructionFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;

#[Fillable(["title", "instruction", "user_id"])]
#[UseFactory(InstructionFactory::class)]
class Instruction extends Model
{
    use HasFactory;

    //
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
