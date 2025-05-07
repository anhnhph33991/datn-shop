<?php

use App\Models\Order;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('messages', function (Blueprint $table) {
    //         $table->id();
    //         $table->unsignedBigInteger('sender_id');    // người gửi
    //         $table->string('sender_type');              // 'user' hoặc 'shop'
    //         $table->unsignedBigInteger('receiver_id');  // người nhận
    //         $table->string('receiver_type');            // 'user' hoặc 'shop'
    //         $table->unsignedBigInteger('product_id')->nullable();   // nếu tin nhắn liên quan đến sản phẩm
    //         $table->text('message');
    //         $table->timestamp('read_at')->nullable();
    //         $table->timestamps();
    //     });
    // }
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conversation_id');
            $table->unsignedBigInteger('sender_id'); // ID của người gửi (user hoặc admin)
            $table->string('sender_type');
            $table->text('message');
            $table->foreign('conversation_id')->references('id')->on('conversations')->onDelete('cascade');
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamp('read_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
