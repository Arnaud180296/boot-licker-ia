<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Services\ConversationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ConversationController extends Controller
{
    // $key = config('services.api_key_open_router.secret');
    /**
        *index()
        *create()
        *store()
        *show($id)
        *edit($id)
        *update($id)
        *destroy($id)
     */
    public function index(ConversationService $conversationService, Request $request){
        $conversations = $conversationService->getAllConversationsFromAuthUser($request->user()->id);
        
        //$user = $request->user();
        //echo $user->id . " ====== " . Auth::user()->id;
        
        return Inertia::render("Conversations/Index", [
            "conversations" => $conversations,
            "user" => $request->user() 
        ]);
    }

    public function show($id, ConversationService $conversationService){
        $conversation = $conversationService->getConversationById($id);
        
        return Inertia::render("Conversations/Show", [
            "conversation" => $conversation
        ]);
    }

    public function store(Request $request){
        
    }
}

