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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('company_id');
            $table->string('vorname');
            $table->string('nachname');
            $table->string('handy_nummer')->nullable();
            $table->string('status')->default('pending');
            $table->string('quality_status')->default('pending');
            $table->string('confirmation_status')->default('pending');
            $table->string('seller_status')->default('pending');
            $table->string('created_by')->nullable();
            $table->string('assigned_to')->nullable();
            $table->string('quality_bemerkung')->nullable();
            $table->string('confirmation_bemerkung')->nullable();
            $table->string('feedback_status')->nullable();
            $table->string('audio')->nullable();

            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
