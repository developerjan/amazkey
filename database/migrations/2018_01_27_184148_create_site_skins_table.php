<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteSkinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wp_siteskins', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('site_type_id')->unsigned();
	        $table->foreign('site_type_id')->references('id')->on('wp_sitetypes')->onDelete('cascade');
	        $table->string('name');
	        $table->string('icon');
	        $table->string('style');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wp_siteskins');
    }
}
