<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->string('role', 32)->default(User::ROLE_USER);
            $table->boolean('email_notification')->default(0);

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            [
                'name' => 'Dima Boro',
                'email' => 'iboro770@gmail.com',
                'password' => Hash::make('password'),
                'role' => User::ROLE_ADMIN,
                'email_notification' => 1,
                'created_at' => now(),
            ],
            [
                'name' => 'Demo',
                'email' => 'demo@example.com',
                'password' => Hash::make('password'),
                'role' => User::ROLE_ADMIN,
                'email_notification' => 0,
                'created_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
