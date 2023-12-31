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
        Schema::create('makanan', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nama');
            $table->string('harga');
            $table->string('jenis');
            $table->string('tingkat kepedasan');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('makanan');
        //
    }
};
