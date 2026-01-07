<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('evidences', function (Blueprint $table) {
            $table->id();
            $table->string('linea_telefono');
            $table->string('correo');
            $table->string('celular_1');
            $table->string('celular_2')->nullable();
            
            // Rutas de las imágenes
            $table->string('img_visita')->nullable();
            $table->string('img_correo')->nullable();
            $table->string('img_whatsapp')->nullable();
            $table->string('img_sms')->nullable();
            
            $table->foreignId('user_id')->constrained(); // Quién registró la evidencia
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evidence');
    }
};
