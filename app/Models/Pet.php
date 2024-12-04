<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pet extends Model
{
       use HasFactory;

    protected $fillable = [
        'nome_doador',
            'contato_doador',
            'estado_doador',
            'cidade_doador',

            // Dados do Pet
            'nome',
            'especie',
            'raca',
            'sexo',
            'porte',
            'idade' ,

            // Destaques
            'destaque_um' ,
            'destaque_dois',
            'destaque_tres' ,

            // Descrição
            'descricao',

           
    ];


    public function usuario()
{
    return $this->belongsTo(User::class, 'usuario_id');
}

public function ong()
{
    return $this->belongsTo(Ong::class, 'ongs_id');
}


    
}
