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
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            // $table->foreignId('user_id')->references('id')->on('users');
            $table->string('user');
            $table->unsignedBigInteger('user_id'); // Tipe data yang sesuai dengan 'id' di tabel 'users'
            $table->foreign('user_id')->references('id')->on('users');
            // $table->foreignId('book_id')->references('id')->on('books');
            $table->string('book');
            $table->string('status');
            $table->string('tgl_pengembalian')->nullable();
            $table->date('due_to')->nullable();
            $table->date('tgl_pinjam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rents');
    }
};
