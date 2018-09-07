<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhitelistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whitelists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_key');
            $table->foreign('user_key')->references('key')->on('users');
            $table->string('url');
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
        Schema::table('whitelists', function (Blueprint $table) {
            //
        });
    }
}
