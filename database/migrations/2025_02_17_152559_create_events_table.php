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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->text('description');
            $table->foreignId('id_event_type')->constrained('event_types')->onDelete('cascade');
            $table->foreignId('id_room')->constrained('rooms')->onDelete('cascade');
            $table->date('date');
            $table->time('time');
            $table->integer('duration');
            $table->integer('price');
            $table->string('picture')->nullable();
            $table->foreignId('id_event_script')->constrained('event_scripts')->onDelete('cascade');
            $table->foreignId('id_creator')->constrained('event_creators')->onDelete('cascade');
            $table->foreignId('id_event_status')->constrained('event_statuses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
