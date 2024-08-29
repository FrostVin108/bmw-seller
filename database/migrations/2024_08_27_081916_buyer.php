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
        Schema::create('buyer', function (Blueprint $table) {
            $table->id();
            $table->string('buyer_name');
            $table->string('plat_number')->unique();
            $table->unsignedBigInteger('car_id'); // Add a foreign key column
            $table->foreign('car_id')->references('id')->on('car'); // Define the foreign key constraint
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyer');
    }
};
