<?php

namespace App\Http\Controllers;

use App\Events\ChatMessage;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class MessageController extends Controller
{
    private const PATH_VIEW = "admin.chats.";
    public function index()
    {
        $conversations = Conversation::with(['user', 'latestMessage'])->get();

        return view(self::PATH_VIEW . __FUNCTION__, compact('conversations'));
    }

    public function store(Request $request, $userId)
    {
        $result = [
            'conversation_id' => $userId,
            'sender_id' => Auth::id(),
            'sender_type' => $request->sender_type,
            'message' => $request->message,
        ];

        $message = Message::create($result);

        $data = $message->load(['conversation', 'sender']);

        broadcast(new ChatMessage($data))->toOthers();

        return response()->json(['data' => $result, 'status' => 200]);
    }

    public function storeClient(Request $request, $userId)
    {
        $result = [
            'conversation_id' => $userId,
            'sender_id' => $request->sender_id,
            'sender_type' => $request->sender_type,
            'message' => $request->message,
        ];

        $message = Message::create($result);

        $data = $message->load(['conversation', 'sender']);

        broadcast(new ChatMessage($data))->toOthers();

        return response()->json(['data' => $result, 'status' => 200]);
    }

    public function handleUpdate(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'message' => 'required|string',
            'user_id' => 'nullable'
        ]);

        $data = [
            'product_id' => $request->product_id,
            'message' => $request->message,
            'sender_id' => $request->user_id,
        ];

        dd($data);

        $message = Message::create([
            'product_id' => $request->product_id,
            'message' => $request->message,
            'sender_id' => $request->user_id,
        ]);

        broadcast(new ChatMessage($message))->toOthers();

        return response()->json(['success' => true, 'message' => $message]);
    }

    public function show($userId)
    {
        try {

            // dd($userId);



            $user = User::query()->where('id', $userId)->first();

            $conversations = Conversation::with(['user', 'latestMessage'])->get();

            $messages = Message::with(['conversation', 'sender'])->where('conversation_id', $userId)->get();

            // dd($messages);

            return view('admin.chats.show', compact('userId', 'user', 'conversations', 'messages'));
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
        }
    }
}
