<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContainerRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('container_rentals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('messenger_id');
            $table->unsignedBigInteger('driver_id')->nullable();
            $table->enum('contract_type', ['cash', 'contract']);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('category_size_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('customer_address_id');
            $table->unsignedBigInteger('container_id');
            $table->decimal('discharge_price', 10, 2);
            $table->integer('discharge_number');
            $table->integer('remaining_discharges');
            $table->decimal('discount', 10, 2);
            $table->decimal('total', 10, 2);
            $table->date('start_at');
            $table->date('end_at');
            $table->enum('status', ['waiting_driver', 'in_progress', 'complete', 'delivered', 'broken']);
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');


            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('messenger_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('driver_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('category_size_id')->references('id')->on('category_sizes')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('customer_address_id')->references('id')->on('customer_addresses')->onDelete('cascade');
            $table->foreign('container_id')->references('id')->on('containers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('container_rentals');
    }
}
