<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("llm_id");
            $table->unsignedBigInteger("user_id");
            $table->string("title",255);
            //$table->timestamp("created_at"); // l'instruction en dessous cree deja les champs created_at et updated_at
            $table->timestamps();

            $table->foreign('llm_id')->references("id")->on("llms");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conversations');
    }
};
