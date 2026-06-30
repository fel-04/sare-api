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
        Schema::create('employee_contracts', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->decimal('salary',8,2);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->integer('hourly_rate');
            $table->unsignedBigInteger('employee_id')->constrained();
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->unsignedBigInteger('contract_type_id')->constrained();
            $table->foreign('contract_type_id')->references('id')->on('contract_types');
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
        Schema::dropIfExists('employee_contracts');
    }
};
