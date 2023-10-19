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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("titulo",255)->nullable();
            $table->string("url",255)->nullable();
            $table->text("contenido")->nullable();
            $table->text("descripcion")->nullable();
            $table->string("imagen")->nullable();
            $table->enum("posted",['si','no'])->default('no');
            $table->foreignId('categories_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
