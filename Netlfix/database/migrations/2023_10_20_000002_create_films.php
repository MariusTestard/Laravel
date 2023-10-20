<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     */
    public function up(): void
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 50);
            $table->text('resume')->nullable();
            $table->integer('duree');
            $table->year('annee');
            $table->unsignedBigInteger( 'realisateur');
            $table->foreign('realisateur')->references('id')->on('personnes');
            $table->unsignedBigInteger( 'producteur');
            $table->foreign('producteur')->references('id')->on('personnes');
            $table->string('lienFilm', 500);
            $table->string('pochette', 500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
