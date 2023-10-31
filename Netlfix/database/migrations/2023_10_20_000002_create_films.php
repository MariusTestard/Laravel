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
            $table->string('lienFilm', 500);
            $table->string('pochette', 1000);
            $table->string('type', 30);
            $table->string('brand', 50);
            $table->double('cote');
            $table->string('rating', 50);
            $table->string('bannerLien', 1000);
            $table->timestamps();
            $table->foreignId('producteur_id')->constrained('personnes');
            $table->foreignId('realisateur_id')->constrained('personnes');
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
