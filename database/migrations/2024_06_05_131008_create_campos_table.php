<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('campos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('descrição')->nullable();
            $table->string('rotulo')->nullable();
            $table->foreignId('formulario_id')->constrained('formularios');
            $table->foreignId('tipo_campo_id')->constrained('tipos_campos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campos');
    }
};
