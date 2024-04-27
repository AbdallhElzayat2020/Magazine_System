<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tag_translation', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();
            $table->string('title')->nullable();
            $table->unique(['tag_id', 'locale']);
            $table->foreignId('tag_id')->references('id')->on('tags')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_translation');
    }
};
