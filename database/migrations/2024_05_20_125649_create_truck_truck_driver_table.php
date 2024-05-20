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
        Schema::create('truck_truck_driver', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('truck_driver_id');
            $table->unsignedBigInteger('truck_id');
            $table->foreign('truck_driver_id')->references('id')->on('truck_drivers');
            $table->foreign('truck_id')->references('id')->on('trucks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_truck_driver__truck');
    }
};
