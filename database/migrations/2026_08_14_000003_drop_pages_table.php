<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Drop the pages table — the Pages feature has been removed in favour of
     * the Menu system which already stores url, icon, hierarchy and sort order.
     */
    public function up(): void
    {
        Schema::dropIfExists('pages');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('pages', function ($table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }
};
