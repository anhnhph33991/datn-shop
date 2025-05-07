<?php

use App\Models\Conversation;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Log;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::routes(['middleware' => ['auth']]);

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});


Broadcast::channel('chat.{receiverId}', function ($user, $user1Id, $user2Id) {
    return (int)$user->id === (int)$user1Id || (int)$user->id === (int)$user2Id;
});


// Broadcast::channel('conversation.{conversationId}', function ($user, $conversationId) {
//     if ($user->role_id == 1) {
//         return true;
//     }
//     return Conversation::where('id', $conversationId)
//         ->where('user_id', $user->id)
//         ->exists();
// });

// Broadcast::channel('conversation.{conversationId}', function ($user, $conversationId) {
//     Broadcast::channel('conversation.{conversationId}', function ($user, $conversationId) {
//         return $user->id === Conversation::findOrFail($conversationId)->user_id;
//     });
// });

// Broadcast::channel('conversation.{conversationId}', function ($user, $conversationId) {
//     if ($user->role_id == 1) {
//         return true;
//     }

//     return \App\Models\Conversation::where('id', $conversationId)
//         ->where('user_id', $user->id)
//         ->exists();
// });


// Broadcast::channel('conversation.{conversationId}', function ($user, $conversationId) {
//     return [
//         $user
//     ];
// });

Broadcast::channel('conversation.{conversationId}', function ($user, $conversationId) {
    Log::info('abc channel realtime');
    Log::info($user);
    Log::info($conversationId);
    return true;
});


// routes/channels.php

// Broadcast::channel('presence-conversation.{conversationId}', function ($user, $conversationId) {
//     Log::info("Authorizing presence-conversation.$conversationId for user " . $user->id);

//     return true; // hoặc logic kiểm tra quyền truy cập vào conversation
// });

// Broadcast::channel('presence-conversation.{conversationId}', function ($user, $conversationId) {
//     Log::info($user); // nếu là null thì bạn chưa đăng nhập
//     return true;
// });



// Broadcast::channel('presence-conversation.{conversationId}', function ($user, $conversationId) {
//     return true;
// });



// Broadcast::channel('presence-conversation.{conversationId}', function ($user, $conversationId) {
//     Log::info('1111');
//     Log::info($user);
//     Log::info($conversationId);
//     return true;
// });



// Broadcast::channel('chat.{receiverId}', function ($user, $receiverId) {
//     return (int) $user->id === (int) $receiverId;
// });
