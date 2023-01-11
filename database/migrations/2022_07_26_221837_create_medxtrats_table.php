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
        Schema::create('medxtrats', function (Blueprint $table) {
            $table->foreignId('tratamientopred_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('medicamento_id')->nullable()->constrained()->nullOnDelete();
            $table->text('indicaciones')->nullable();
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
        Schema::dropIfExists('medxtrats');
    }
};
