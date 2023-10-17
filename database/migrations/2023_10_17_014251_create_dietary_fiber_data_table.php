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
        Schema::create('dietary_fiber_data', function (Blueprint $table) {
            $table->id();
            $table->string('foodstuff_name');
            $table->decimal('soluble_fiber', 4, 1);
            $table->decimal('insoluble_fiber', 4, 1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dietary_fiber_data');
    }
};
