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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre_prop');
            $table->string('apellido_prop');
            $table->string('ci_prop');
            $table->date('fecha_nac');
            $table->string('foto');
            $table->string('nombre_club');
            $table->string('tel_cel');
            $table->string('gmail');
            $table->string('abreviatura');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
