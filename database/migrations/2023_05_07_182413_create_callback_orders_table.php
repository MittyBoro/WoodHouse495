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
        Schema::create('callback_orders', function (Blueprint $table) {
            $table->id();

            $table->string('form_name')->nullable();

            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->text('description')->nullable();
            $table->text('extra')->nullable();

            $table->ipAddress('ip');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('callback_orders');
    }
};
