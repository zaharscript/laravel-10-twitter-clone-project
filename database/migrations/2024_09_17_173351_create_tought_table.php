<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *varchar 240 char
     *likes integer 0
     *dislikes integer 0
     *views integer 0
     *created_at timestamp
     *updated_at timestamp
     */
    public function up(): void
    {
        Schema::create('tought', function (Blueprint $table) {
            $table->id();
            $table->string('content', 240);
            $table->unsignedBigInteger('likes')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tought');
    }
};
