<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_sessions_table.php
public function up()
{
    Schema::create('sessions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('study_group_id')->constrained()->onDelete('cascade');
        $table->timestamp('start_time');
        $table->timestamp('end_time');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
