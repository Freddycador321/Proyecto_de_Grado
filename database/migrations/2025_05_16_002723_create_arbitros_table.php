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
        Schema::create('arbitros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_arb');
            $table->string('apellido_arb');
            $table->integer('ci_arb');
            $table->date('fecha_nac_arb');
            $table->string('foto', 255);
            $table->string('nivel');
            $table->string('cel_arb');
            $table->string('gmail_arb');
            $table->string('estado');
            $table->text('nota')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arbitros');
    }
};
