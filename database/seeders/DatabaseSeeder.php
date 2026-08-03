<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Llm;
use App\Models\Instruction;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //Généré par IA

         // 1. Création de votre compte fixe
        User::factory()->create([
            'name' => 'Arnaud',
            'email' => 'test@example.com',
        ]);

        // 2. Création des 3 LLM de référence
        $llms = Llm::factory()->count(3)->create();

        // 3. Création des 10 utilisateurs avec la méthode each()
        User::factory()
            ->count(10)
            ->create()
            ->each(function (User $user) use ($llms) {
                
                // 4. Génération des instructions pour cet utilisateur (1 à 3)
                Instruction::factory()
                    ->count(rand(1, 3))
                    ->create([
                        'user_id' => $user->id,
                    ]);

                // 5. Génération des conversations pour cet utilisateur (1 à 2)
                Conversation::factory()
                    ->count(rand(1, 2))
                    ->create([
                        'user_id' => $user->id,
                        'llm_id'  => $llms->random()->id,
                    ])
                    ->each(function (Conversation $conversation) {
                        
                        // 6. Génération des messages pour cette conversation (1 à 5)
                        Message::factory()
                            ->count(rand(1, 5))
                            ->create([
                                'conversation_id' => $conversation->id,
                            ]);
                    });
            });
        
    }
}