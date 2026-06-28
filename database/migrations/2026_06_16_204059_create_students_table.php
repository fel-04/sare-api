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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('student_number');
            $table->date('enrollment_date'); //fecha de inscripción
            $table->date('admission_date'); // fecha de admisión

            // foreing keys
            $table->unsignedBigInteger('status_student_id')->constrained();
            $table->foreign('status_student_id')->references('id')->on('status_students');
            $table->unsignedBigInteger('person_id')->constrained();
            $table->foreign('person_id')->references('id')->on('persons');

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
        Schema::dropIfExists('students');
    }
};
