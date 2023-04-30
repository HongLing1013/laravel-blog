<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id'); //key
            $table->unsignedInteger('user_id'); // 關聯欄位
            $table->string('title');
            $table->text('content');
            $table->timestamps(); // 時間戳 會自動產生 created_at 和 updated_at 兩個欄位

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
            //設定關聯並且清除與使用者有關的所有資料
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['user_id']); //移除關聯, 這裡的陣列內放的是欄位名稱
        });

        Schema::dropIfExists('posts');
    }
};
