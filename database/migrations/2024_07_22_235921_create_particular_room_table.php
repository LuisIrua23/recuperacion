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
        Schema::create('particular_room', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('room_id')->nullable();
            $table->foreign('room_id')
            ->references('id')
            ->on('rooms')
            ->onDelete('set null');

            $table->unsignedBigInteger('particular_id')->nullable();
            $table->foreign('particular_id')
            ->references('id')
            ->on('particulars')
            ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('particular_room');
    }
};
