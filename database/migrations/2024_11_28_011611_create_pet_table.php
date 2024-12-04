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
            $table->string('nome_doador'); // Nome do doador
            $table->string('contato_doador'); // Contato do doador
            $table->string('estado_doador'); // Estado do doador
            $table->string('cidade_doador'); // Cidade do doador
            $table->string('nome'); // Nome do pet
            $table->string('especie'); // Espécie do pet
            $table->string('raca'); // Raça do pet
            $table->string('sexo'); // Sexo do pet
            $table->string('porte'); // Porte do pet
            $table->string('idade'); // Idade do pet
            $table->string('destaque_um'); // Primeiro destaque
            $table->string('destaque_dois')->nullable(); // Segundo destaque (opcional)
            $table->string('destaque_tres')->nullable(); // Terceiro destaque (opcional)
            $table->text('descricao');// Descrição do pet
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
