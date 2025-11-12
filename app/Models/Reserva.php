<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pacote_id',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function pacote(){
        return $this->belongsTo(Pacote::class);
    }
    public function packages()
    {
    return $this->belongsToMany(ImagePackage::class, 'amenity_image_package');//criado o relacionamento muitos-para-muitos usando a tabela pivô
    //Agora o Laravel sabe que um pacote tem várias comodidades, e uma comodidade pode estar em vários pacotes
    }
}
