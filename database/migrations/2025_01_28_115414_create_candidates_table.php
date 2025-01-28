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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('candidate_name', 50);
            $table->string('candidate_icon', 100)->unique();
            $table->integer('candidate_serial')->unique();
            $table->string('candidate_photo', 100);
            $table->string('candidate_description', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
