<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['image_package_id', 'file_path', 'title', 'description'];

    public function package()
    {
        return $this->belongsTo(ImagePackage::class, 'image_package_id');
    }
}
