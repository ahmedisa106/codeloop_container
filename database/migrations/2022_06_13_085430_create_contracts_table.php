<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('contract_serial')->nullable();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('messenger_id');
            $table->unsignedBigInteger('container_rental_id');
            $table->longText('qr')->nullable();
            $table->longText('pdf')->nullable();

            $table->string('area_name')->nullable();
            $table->bigInteger('area_number')->nullable();
            $table->bigInteger('block_number')->nullable();
            $table->bigInteger('plan_number')->nullable();

            $table->enum('status', ['on', 'off', 'broken'])->default('on');

            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('messenger_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('container_rental_id')->references('id')->on('container_rentals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
