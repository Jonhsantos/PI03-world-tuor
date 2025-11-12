<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    // executando a migrations.
    
    public function up(): void
    {
        Schema::create('image_packages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    
    // reverter a migrations.
     
    public function down(): void
    {
        Schema::dropIfExists('image_packages');
    }
};
