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
        Schema::create('curriculum_vitae_degrees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curriculum_vitae_id');
            $table->index('curriculum_vitae_id');
            $table->string('degree');
            $table->string('starting_month');
            $table->year('starting_year');
            $table->year('finished_year')->nullable();
            $table->string('finished_month')->nullable();
            $table->boolean('is_finished')->default(false);
            $table->string('institution');
            $table->string('department');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculum_vitae_degrees');
    }
};
