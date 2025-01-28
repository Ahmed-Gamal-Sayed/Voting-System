<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('results_of_voting', function (Blueprint $table) {
            $table->integer('candidate_serial')->unique();
            $table->integer('candidate_counter')->default(0);
            $table->foreign('candidate_serial')->references('candidate_serial')->on('candidates')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results_of_voting');
    }
};
