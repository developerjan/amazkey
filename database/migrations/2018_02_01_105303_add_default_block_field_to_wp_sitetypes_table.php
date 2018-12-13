<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultBlockFieldToWpSitetypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('wp_sitetypes')) {
            Schema::table('wp_sitetypes', function (Blueprint $table) {
                $table->text('default_blocks');
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
        if (Schema::hasTable('wp_sitetypes')) {
            Schema::table('wp_sitetypes', function (Blueprint $table) {
                $table->dropColumn('default_blocks');
            });
        }
    }
}
