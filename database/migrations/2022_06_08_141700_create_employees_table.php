<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('phone');
            $table->string('photo')->nullable();
            $table->string('nationality');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('branch_id');
            $table->enum('job_type', ['messenger', 'driver']);
            $table->enum('messenger_type', ['trash', 'rubble'])->nullable();
            $table->enum('status', ['active', 'inactive']);

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');

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
        Schema::dropIfExists('employees');
    }
}
