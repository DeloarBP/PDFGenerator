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
        Schema::create('curriculum_vitae_researches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curriculum_vitae_id')->constrained('curriculum_vitaes')->cascadeOnDelete();
            $table->enum('published_month', [
                'January', 'February', 'March', 'April', 'May', 'June', 'July',
                'August', 'September', 'October', 'November', 'December'
            ]);
            $table->year('published_year');
            $table->string('title');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculum_vitae_researches');
    }
};
