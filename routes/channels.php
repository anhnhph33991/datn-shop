<?php

use App\Models\Conversation;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Log;

Broadcast::routes(['middleware' => ['auth']]);

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('chat.{receiverId}', function ($user, $user1Id, $user2Id) {
    return (int)$user->id === (int)$user1Id || (int)$user->id === (int)$user2Id;
});

Broadcast::channel('conversation.{conversationId}', function ($user, $conversationId) {
    Log::info('abc channel realtime');
    Log::info($user);
    Log::info($conversationId);
    return true;
});

Broadcast::channel('voucher-notification', function () {
    return true;
});
