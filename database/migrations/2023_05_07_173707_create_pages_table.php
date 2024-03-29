<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();

            $table
                ->string('slug')
                ->nullable()
                ->unique()
                ->index();

            $table->string('title');
            $table->text('description')->nullable();

            $table->string('meta_title');
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();

            $table->string('view')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
