<?php

use App\Http\Controllers\ConversationController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
            
    
    // URI, class qui possede la methode ET la methode a appeler
    Route::get("/conversations", [ConversationController::class, "index"])->name("conversations.index");
    Route::get("/conversations/{id}", [ConversationController::class, "show"])->name("conversations.show");

    Route::post('conversations', [ConversationController::class, 'store'])->name('conversations.store');
});

//guillot.olivier@example.org
// password

//https://laravel.com/docs/13.x/queries#basic-where-clauses
//https://laravel.com/docs/13.x/collections
//https://inertiajs.com/docs/v3/the-basics/forms


/**
 * 
 * Pour mon autre projet : 
 *  - https://laravel.com/docs/13.x/sanctum#how-it-works
 *  - https://laravel.com/docs/13.x/fortify
 */

/**
 * https://fr.vuejs.org/guide/essentials/component-basics.html
 * https://fr.vuejs.org/api/built-in-directives.html
 * 
 * DB aussi
 * - https://laravel.com/docs/13.x/eloquent#collections
 * - https://laravel.com/docs/13.x/eloquent-collections#available-methods
 * 
 * Auth
 * - https://laravel.com/docs/13.x/authentication
 * 
 * DB
 * - https://laravel.com/docs/13.x/queries
 * 
 * pour apres
 *  - https://fr.vuejs.org/guide/components/props.html
 */



/**
 * DB 
 *  - https://laravel.com/docs/13.x/eloquent#retrieving-single-models
 *  - https://laravel.com/docs/13.x/eloquent-collections#available-methods
 *  - https://laravel.com/docs/13.x/queries
 *  - https://laravel.com/docs/13.x/collections
 * 
 * 
 * AUTH
 *  - https://laravel.com/docs/13.x/authentication
 * 
 * VUE
 *  - https://fr.vuejs.org/guide/essentials/component-basics.html
 *  - https://fr.vuejs.org/tutorial/#step-1
 *  - https://fr.vuejs.org/api/built-in-directives.html
 *  - https://fr.vuejs.org/guide/components/props.html
 * 
 * 
 * 
 * 
 * 
 */
require __DIR__.'/settings.php';
