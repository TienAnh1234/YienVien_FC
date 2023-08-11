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
        Schema::create('footballers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('year_of_birth');
            $table->string('ethnic');
            $table->string('gender');
            $table->string('height');
            $table->string('Weight');
            $table->foreignId('address_id')->constrained('addresses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footballers');
    }
};


