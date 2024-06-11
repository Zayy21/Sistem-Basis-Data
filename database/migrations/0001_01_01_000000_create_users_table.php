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
        Schema::create('Customers', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('meja')->unique();
            $table->integer('stick');
            $table->integer('gloves');
            $table->integer('jam')->unsigned();
            $table->string('metodePembayaran');
            $table->string('transaksi');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Customers');
    }
};
