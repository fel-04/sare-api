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
        Schema::create('teacher_specialties', function (Blueprint $table) {
            $table->id();
            // foreing keys
            $table->unsignedBigInteger('teacher_id')->constrained();
            $table->foreign('teacher_id')->references('id')->on('teachers');

            $table->unsignedBigInteger('specialty_id')->constrained();
            $table->foreign('specialty_id')->references('id')->on('specialties');

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->softDeletes();
            $table->string('deleted_reason')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_specialties');
    }
};
