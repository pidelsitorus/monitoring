<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('status');
            $table->foreignId('pasien_id')->constrained('pasiens')->onDelete('cascade');
            $table->float('heart_rate_data')->nullable();
            $table->float('spo2_data')->nullable();
            $table->float('respiration_data')->nullable();
            $table->float('delta')->nullable();
            $table->float('theta')->nullable();
            $table->float('alpha')->nullable();
            $table->float('low_beta')->nullable();
            $table->float('high_beta')->nullable();
            $table->float('gamma')->nullable();
            $table->timestamp('timestamp')->nullable();
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
        Schema::dropIfExists('devices');
    }
}
