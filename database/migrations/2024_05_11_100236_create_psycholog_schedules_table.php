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
        Schema::create('psycholog_schedules', function (Blueprint $table) {
            $table->id('schedule_id');
            $table->integer('psycholog_id');
            $table->date('date');
            $table->time('start_hour');
            $table->time('end_hour');
            $table->enum('location', ['Online', 'Onsite']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psycholog_schedules');
    }
};
