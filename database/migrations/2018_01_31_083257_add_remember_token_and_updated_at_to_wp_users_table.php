<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRememberTokenAndUpdatedAtToWpUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('wp_users')) {
            Schema::table('wp_users', function (Blueprint $table) {
                $table->rememberToken();
                $table->dateTime('update_at');
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
        if (Schema::hasTable('wp_users')) {
            Schema::table('wp_users', function (Blueprint $table) {
                $table->dropRememberToken();
                $table->dropColumn('update_at');
            });
        }
    }
}
