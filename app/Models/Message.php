<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'sender_id',
    //     'sender_type',
    //     'receiver_id',
    //     'product_id',
    //     'message',
    //     'read_at',
    // ];

    protected $fillable = ['conversation_id', 'sender_id', 'sender_type', 'message'];

    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
}
