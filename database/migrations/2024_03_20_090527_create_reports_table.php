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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->text('First_fragment_label') -> nullable();;
            $table->text('String')->nullable();
            $table->text('String_Length')->nullable();
            $table->text('Comment')->nullable();
            $table->text('Gender')->nullable();
            $table->text('Plurality')->nullable();
            $table->text('Language')->nullable();
            $table->text('Platform')->nullable();
            $table->text('TV_Brand')->nullable();
            $table->text('Tip_ID')->nullable();
            $table->text('Location')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
