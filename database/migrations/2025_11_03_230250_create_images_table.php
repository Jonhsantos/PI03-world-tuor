<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('image_package_id')
                  ->constrained('image_packages')
                  ->onDelete('cascade'); // apaga imagens se o pacote for excluído

            $table->string('file_path'); // caminho da imagem (storage/app/public/...)
            $table->string('title')->nullable(); // título opcional
            $table->text('description')->nullable(); // descrição opcional
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
