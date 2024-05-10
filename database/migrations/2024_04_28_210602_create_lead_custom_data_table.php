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
        Schema::create('lead_custom_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lead_custom_field_id');
            $table->unsignedBigInteger('lead_id');
            $table->string('value')->nullable();
            $table->timestamps();

            $table->foreign('lead_custom_field_id')->references('id')->on('lead_custom_fields')->onDelete('cascade');
            $table->foreign('lead_id')->references('id')->on('leads')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lead_custom_data');
    }
};
