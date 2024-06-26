<?php

use App\Models\User;
use App\Models\UserImages;
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
        Schema::create(UserImages::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on(User::TABLE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_images');
    }
};
