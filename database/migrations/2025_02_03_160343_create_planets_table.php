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
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->string('mass_kg', 64);
            $table->mediumInteger('diameter_km')->unsigned();
            $table->bigInteger('sun_distance');
            $table->mediumInteger('orbital_days');
            $table->tinyInteger('moons')->unsigned();
            $table->text('atmosphere');
            $table->smallInteger('avg_temp');
            $table->text('description');
            $table->string('link', 128);
            $table->string('video', 128);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planets');
    }
};
