<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Drop the role_page pivot table — Page Access is handled entirely
     * by Spatie permissions (PAGE_VIEW, etc.) so this pivot is redundant.
     */
    public function up(): void
    {
        Schema::dropIfExists('role_page');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('role_page', function ($table) {
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('page_id');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
            $table->primary(['role_id', 'page_id']);
        });
    }
};
