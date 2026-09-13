<?php

namespace Database\Factories;

use App\Models\Instruction;
use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Instruction>
 */
#[UseModel(Instruction::class)]
class InstructionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    
        $instructions = [
            "Réponds toujours en utilisant un ton professionnel et concis.",
            "Fais moi un résumé de ce texte sans depasser 300 mots",
            "Vulgarise les concepts techniques pour un enfant de 10 ans.",
            "Sois un expert en informatique et explique les concepts de la façon rigoureuse"
        ];

        return [
            "title" => fake()->sentence(3),
            "instruction" => fake()->randomElement($instructions), 
            "created_at" => fake()->dateTime(max: 'now'),
            "updated_at" => now(),
        ];
    }
}
