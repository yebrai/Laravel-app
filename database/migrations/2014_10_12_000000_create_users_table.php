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
            $table->id();//Integrer Unsigned Increment
            $table->string('name');//varchar 255
            // $table->text('comentarios'); // More chars
            $table->string('email')->unique();//
            $table->timestamp('email_verified_at')->nullable();// nullable for probably empty
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();// created_at updated_at
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
