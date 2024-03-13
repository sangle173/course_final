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
        Schema::create('report', function (Blueprint $table) {
            $table->id();
            $table->string('date') -> nullable();;
            $table->string('team')->nullable();
            $table->string('action')->nullable();
            $table->string('jira_id')->nullable();
            $table->string('jira_summary')->nullable();
            $table->string('working_status')->nullable();
            $table->string('ticket_status')->nullable();
            $table->string('tester_1')->nullable();
            $table->string('tester_2')->nullable();
            $table->string('tester_3')->nullable();
            $table->string('id_summary')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report');
    }
};
