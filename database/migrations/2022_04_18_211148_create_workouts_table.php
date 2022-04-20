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
        Schema::create('workouts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('daily_record_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['Indoor Run', 'Outdoor Run', 'Indoor Bike', 'Outdoor Bike', 'Indoor Walk', 'Outdoor Walk', 'Strength', 'Other']);
            $table->time('duration')->nullable();
            $table->decimal('distance', 8, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workouts');
    }
};
