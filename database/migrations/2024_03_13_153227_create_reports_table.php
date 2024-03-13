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
            $table->text('date') -> nullable();;
            $table->text('team')->nullable();
            $table->text('action')->nullable();
            $table->text('jira_id')->nullable();
            $table->text('jira_summary')->nullable();
            $table->text('working_status')->nullable();
            $table->text('ticket_status')->nullable();
            $table->text('tester_1')->nullable();
            $table->text('tester_2')->nullable();
            $table->text('tester_3')->nullable();
            $table->text('id_summary')->nullable();
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
