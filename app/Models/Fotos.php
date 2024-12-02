<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotos extends Model
{
    use HasFactory;

    /**
     * Define os campos que podem ser preenchidos em massa.
     */
    protected $fillable = [
        'imagem',
        'pets_id',
    ];

    /**
     * Define a relação entre Foto e Pet.
     */
    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pets_id');
    }
}
