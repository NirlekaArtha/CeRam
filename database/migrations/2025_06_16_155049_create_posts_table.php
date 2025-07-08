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
            $table->id();
            $table->foreignId('user_id')->default(0)->constrained('users')->onDelete("set default");
            $table->string('title')->unique();
            $table->text('content');
            $table->string('image')->default('scary1.jpg');
            $table->decimal('rating', 3, 2)->default(0.00);
            $table->unsignedInteger('votes')->default(0);
            $table->string('slug')->unique();
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
