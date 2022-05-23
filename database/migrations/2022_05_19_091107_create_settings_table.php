<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile')->nullable();
            $table->string('address');
            $table->string('email');
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('logo')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('breadcrumb')->nullable();
            $table->text('map')->nullable();
            // seo
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();

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
        Schema::dropIfExists('settings');
    }
}
