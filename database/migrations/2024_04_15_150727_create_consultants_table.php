<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consultants', function (Blueprint $table) {
            $table->id("consultant_id");
            $table->integer("user_id");
            $table->integer("schedule_id");
            $table->text("complaint")->nullable();
            $table->text("diagnose")->nullable();
            $table->text("advice")->nullable();
            $table->text("url")->nullable();
            $table->dateTime("date");
            $table->integer("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultants');
    }
};
