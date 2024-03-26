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
        Schema::create('acquaintance_logs', function (Blueprint $table) {
            $table->id('acquaintance_log_id');
            $table->integer('from_user');
            $table->integer('to_user');
            $table->string('from_whatsapp_number');
            $table->string('to_whatsapp_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acquaintance_logs');
    }
};
