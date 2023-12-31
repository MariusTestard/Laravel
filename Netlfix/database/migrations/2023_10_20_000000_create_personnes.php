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
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->string('prenom', 50);
            $table->string('nom', 50);
            $table->date('date');
            $table->string('photo', 500);
            $table->string('rolePrincipal',50);
            $table->string('wikiLien', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnes');
    }
};
