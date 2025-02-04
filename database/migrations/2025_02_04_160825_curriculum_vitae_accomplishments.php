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
        Schema::create('curriculum_vitae_accomplishments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curriculum_vitae_id');
            $table->index('curriculum_vitae_id');
            $table->string('title');
            $table->text('description');
            $table->year('year');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculum_vitae_accomplishments');
    }
};
