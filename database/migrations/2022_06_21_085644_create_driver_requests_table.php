<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('driver_id');
            $table->unsignedBigInteger('container_rental_id');
            $table->enum('type', ['delivery', 'discharge']);
            $table->enum('status', ['waiting_approval', 'in_delivery', 'delivered', 'in_discharge', 'discharged']);
            $table->timestamps();

            $table->foreign('driver_id')->references('id')->on('employees');
            $table->foreign('container_rental_id')->references('id')->on('container_rentals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver_requests');
    }
}
