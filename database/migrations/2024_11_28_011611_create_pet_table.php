<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('raca');
            $table->string('porte');
            $table->string('idade');
            $table->string('destaque');
            $table->string('segundo_destaque')->nullable();
            $table->string('terceiro_destaque')->nullable();
            $table->text('descricao');
            $table->string('localizacao');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('ongs_id');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet');
    }
};
