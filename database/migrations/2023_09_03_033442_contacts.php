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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('identification');
            $table->string('measurer');
            $table->string('current_reading');
            $table->string('previous_reading');
            $table->string('monthly_consumption');
            $table->string('amount_payable');
            $table->string('arrears');
            $table->string('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
