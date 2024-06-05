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
        Schema::create('opcoes_campos', function (Blueprint $table) {
            $table->id();
            $table->string('valor');
            $table->string('rotulo')->nullable();
            $table->foreignId('campos_id')->constrained('campos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opcoes_campos');
    }
};
