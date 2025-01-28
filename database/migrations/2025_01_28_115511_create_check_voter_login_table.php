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
        Schema::create('check_voter_logins', function (Blueprint $table) {
            $table->bigInteger('voter_national_number')->unique();
            $table->dateTime('voter_voting_date');
            $table->foreign('voter_national_number')->references('voter_national_number')->on('voters')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_voter_login');
    }
};
