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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer('cepPed');
            $table->string('ruaPed');
            $table->string('bairroPed');
            $table->string('cidadePede');
            $table->string('ufPed');
            $table->integer('numeroPed');
            $table->string('complPed');
            $table->integer('quantPed');
            $table->integer('telefonePed');
            $table->integer('cpfPed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
