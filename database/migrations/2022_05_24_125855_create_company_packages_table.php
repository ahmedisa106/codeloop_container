<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('package_id');
            $table->date('package_finish_at')->nullable();
            $table->integer('package_price')->nullable();
            $table->integer('discount')->default(0);
            $table->integer('price_after_discount')->default(0);
            $table->enum('status', ['subscribed', 'unsubscribed', 'finished'])->default('unsubscribed');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
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
        Schema::dropIfExists('company_packages');
    }
}
