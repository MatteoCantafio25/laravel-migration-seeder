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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 30);
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 30)->unique();
            $table->smallInteger('number_of_carriages')->unsigned();
            $table->boolean('in_time')->default(1);
            $table->boolean('canceled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
