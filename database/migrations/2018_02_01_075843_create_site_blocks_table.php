<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('wp_site_blocks')) {
            Schema::create('wp_site_blocks', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('wp_name');
                $table->string('icon');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('wp_site_blocks')) {
            Schema::dropIfExists('wp_site_blocks');
        }
    }
}
