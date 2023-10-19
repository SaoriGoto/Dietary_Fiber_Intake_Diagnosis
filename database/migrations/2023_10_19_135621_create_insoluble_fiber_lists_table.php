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
        Schema::create('insoluble_fiber_lists', function (Blueprint $table) {
            $table->id();
            $table->string('foodstuff_name');
            $table->decimal('insoluble_fiber', 4, 1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insoluble_fiber_lists');
    }
};
