<?php

namespace App\Services;

use App\Models\Conversation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ConversationService 
{
    /**
     * 
     * 
     * 
     * et ensuite route et controller
     * 
     * et apres les vues
     */


    public function getAllConversationsFromAuthUser(int $userId){
        $conversations = Conversation::where("user_id", $userId)->get();
        
        //dd($conversations);//dump and die (debug)
        return $conversations;
    }

    public function getConversationById($id_conversation){
        
    }
}