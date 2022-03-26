<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showtimes', function (Blueprint $table) {
            $table->id();
            $table->string('time_start')->nullable();
            $table->string('time_end')->nullable();
            $table->string('length')->nullable();
            $table->string('date_from')->nullable();
            $table->string('date_to')->nullable();
            $table->foreignId('movie_id')->nullable()->constrained('movies');
            $table->foreignId('theater_id')->nullable()->constrained('theaters');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showtimes');
    }
};
