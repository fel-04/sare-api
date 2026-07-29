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
        Schema::create('emergency_contacts', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('name');
            $table->string('last_name');
            $table->string('second_last_name');
            $table->boolean('is_authorized_pickup')->default(false);
            $table->string('street');
            $table->string('external_number');
            $table->string('internal_number')->nullable();
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('country')->nullable();;
            $table->string('reference')->nullable();;
            $table->unsignedBigInteger('person_id')->constrained();
            $table->foreign('person_id')->references('id')->on('persons');
            $table->unsignedBigInteger('contact_relationship_id')->constrained();
            $table->foreign('contact_relationship_id')->references('id')->on('contact_relationships');
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
        Schema::dropIfExists('emergency_contacts');
    }
};
