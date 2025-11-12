<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagePackage extends Model
{
    protected $fillable = ['name', 'description'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function amenities()
    {
    return $this->belongsToMany(Amenity::class, 'amenity_image_package');//cria o relacionamento muitos-para-muitos usando a tabela pivô
    }

}
