<?php

namespace Database\Factories;

use App\Models\Llm;
use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Llm>
 */
#[UseModel(Llm::class)]
class LlmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $listLlm = [
            "claude",
            "chatgpt",
            "gemini"
        ];

        return [
            //
            "name" => fake()->randomElement($listLlm),
            "api_url" => fake()->domainName(),
            "provider" => fake()->randomElement($listLlm),
            "is_active" => fake()->boolean(),
            "created_at" => fake()->dateTime("now"),
            "updated_at" => now()

        ];
    }
}
