<?php

use App\Models\CurriculumVitae;
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
            $table->foreignId('curriculum_vitae_id')->constrained(CurriculumVitae::class)->cascadeOnDelete();
            $table->string('title');
            $table->enum('starting_month', [
                'January', 'February', 'March', 'April', 'May', 'June', 'July',
                'August', 'September', 'October', 'November', 'December'
            ]);
            $table->year('starting_year');
            $table->year('finished_year')->nullable();
            $table->enum('finished_month', [
                'January', 'February', 'March', 'April', 'May', 'June', 'July',
                'August', 'September', 'October', 'November', 'December'
            ])->nullable();
            $table->boolean('is_finished')->default(false);
            $table->string('institution');
            $table->string('department')->nullable();
            $table->string('board')->nullable();
            $table->tinyInteger('duration')->nullable();
            $table->string('grade');
            $table->string('total_grade');
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
