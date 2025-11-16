<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reserva;

// Define a classe Pacote que representa um modelo Eloquent
class Pacote extends Model
{
    // Define os campos que podem ser preenchidos em massa (mass assignment)
    protected $fillable = [
        'nome',
        'continente',
        'pais',
        'descricao',
        'preco',
        'data_inicio',
        'data_fim'
    ];

public function reservas(){
    
    return $this->hasMany(Reserva::class);
}


}

