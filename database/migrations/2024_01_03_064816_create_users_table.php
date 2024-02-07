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
        // Schema::table('users', function (Blueprint $table) {
        //     $table->unsignedBigInteger('user_id');
        //     // Define any foreign key constraints or other column properties if needed
        // });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kelas');
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->unsignedBigInteger('role_id');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('role_id')->references('id')->on('roles')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');

        Schema::table('table_name', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
};
