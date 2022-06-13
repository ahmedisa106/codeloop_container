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
            $table->enum('contract_type', ['rubble', 'trash']);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('category_size_id');
            $table->unsignedBigInteger('customer_id');
            $table->longText('customer_address');
            $table->unsignedBigInteger('contract_id')->nullable();
            $table->unsignedBigInteger('container_id');
            $table->decimal('discharge_price', 10, 2);
            $table->integer('discharge_number');
            $table->decimal('discount', 10, 2);
            $table->decimal('total', 10, 2);
            $table->date('start_at');
            $table->date('end_at');
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
        Schema::dropIfExists('container_rentals');
    }
}
