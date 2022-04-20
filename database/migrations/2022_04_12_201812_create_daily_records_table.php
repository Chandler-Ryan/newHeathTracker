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
        Schema::create('daily_records', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained();
            $table->unique(['user_id', 'record_date']);
            $table->date('record_date')->default( date('Y-m-d') );
            $table->decimal('weight', 5, 1)->nullable();
            $table->unsignedInteger('systolic')->nullable();
            $table->unsignedInteger('diastolic')->nullable();
            $table->unsignedInteger('resting_heartrate')->nullable();
            $table->unsignedInteger('steps')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_records');
    }
};
