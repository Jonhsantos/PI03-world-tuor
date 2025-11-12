<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('amenities', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // nome da comodidade (ex: Wi-Fi)
            $table->string('icon')->nullable(); // opcional, caminho de ícone ou nome de classe do ícone(se quiser exibir um ícone (por exemplo, da Font Awesome)
            $table->text('description')->nullable(); // descrição, se quiser exibir detalhes
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('amenities');
    }
};
