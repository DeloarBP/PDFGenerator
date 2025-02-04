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
        Schema::create('curriculum_vitae_contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curriculum_vitae_id');
            $table->index('curriculum_vitae_id');
            $table->string('primary_contact');
            $table->string('secondary_contact')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email');
            $table->string('address');
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('state')->nullable();
            $table->string('country');
            $table->string('nationality');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculum_vitae_contacts');
    }
};
