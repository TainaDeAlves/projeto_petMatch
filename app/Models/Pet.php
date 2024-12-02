<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pet extends Model
{
       use HasFactory;

    protected $fillable = [
        'nome',
        'raca',
        'porte',
        'idade',
        'destaque',
        'segundo_destaque',
        'terceiro_destaque',
        'descricao',
        'localizacao',
        'usuario_id',
        'ongs_id',
    ];


    public function usuario()
{
    return $this->belongsTo(User::class, 'usuario_id');
}

public function ong()
{
    return $this->belongsTo(Ong::class, 'ongs_id');
}

public function foto()
{
return $this->belongsTo(Fotos::class, 'foto_id');
}

    
}
