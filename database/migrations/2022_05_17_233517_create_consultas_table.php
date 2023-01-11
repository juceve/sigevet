<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            
            $table->longText('anamnesis');
            $table->longText('diagpresuntivo')->nullable();
            $table->longText('diagconclusivo')->nullable();
            $table->dateTime('fecreconsulta')->nullable();
            $table->longText('recomendaciones')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('paciente_id')->nullable()->constrained()->nullOnDelete();
            $table->dateTime('dateConsulta');
            $table->decimal('importe',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
};
