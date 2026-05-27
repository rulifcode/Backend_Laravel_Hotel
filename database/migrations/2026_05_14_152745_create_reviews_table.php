<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            $table->foreignId('kamar_id')
                ->nullable()
                ->constrained('kamar')
                ->onDelete('cascade');

            $table->string('nama');

            $table->string('foto')->nullable();

            $table->decimal('rating', 2, 1);

            $table->text('komentar')->nullable();

            $table->boolean('is_featured')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};