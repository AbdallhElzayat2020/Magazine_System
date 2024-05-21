<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    return new class extends Migration {
        /**
         * Run the migrations.
         */

        public function up(): void
        {
            Schema::create('setting_translations' , function ( Blueprint $table ) {
                $table->id();
                $table->foreignId('setting_id')->references('id')->on('settings')->cascadeOnDelete()->cascadeOnUpdate();
                $table->string('locale')->index();
                $table->string('image')->nullable();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->text('address')->nullable();
                $table->unique([ 'setting_id' , 'locale' ]);
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('setting_translations');
        }
    };
