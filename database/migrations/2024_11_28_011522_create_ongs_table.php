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
        Schema::create('ongs', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cnpj');
            $table->string('descricao');
            $table->string('endereco');
            $table->string('estado');
            $table->string('cidade');
            $table->string('complemento');
            $table->string('telefone');
            $table->string('celular');
            $table->string('email')->unique;
            $table->string('redes_soc');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ongs');
    }
};

