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
        Schema::create('event_orders', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->text('description');
            $table->foreignId('event_type_id')->constrained('event_types')->onDelete('cascade');
            $table->integer('duration');
            $table->integer('price');
            $table->string('picture')->nullable();
            $table->string('bigpicture')->nullable();
            $table->text('script');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('event_status_id')->constrained('event_statuses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_orders');
    }
};
