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
        Schema::create('student_charges', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->date('due_date');
            $table->decimal('amount', 10, 2);

            $table->unsignedBigInteger('student_id')->constrained();
            $table->foreign('student_id')->references('id')->on('students');

            $table->unsignedBigInteger('enrollment_id')->constrained();
            $table->foreign('enrollment_id')->references('id')->on('enrollments')->nullable();

            $table->unsignedBigInteger('charge_type_id')->constrained();
            $table->foreign('charge_type_id')->references('id')->on('charge_types');

            $table->unsignedBigInteger('charge_status_id')->constrained();
            $table->foreign('charge_status_id')->references('id')->on('charge_statuses');

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
        Schema::dropIfExists('student_charges');
    }
};
