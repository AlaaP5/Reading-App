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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('image')->nullable();
            $table->date('birthDay');
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('code')->nullable();
            $table->boolean('StatusCode')->nullable();
            $table->string('password');
            $table->float('evaluation')->nullable();
            $table->string('fcm_token')->nullable();  // add
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
