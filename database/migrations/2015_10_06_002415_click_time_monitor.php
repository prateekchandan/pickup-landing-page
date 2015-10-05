<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClickTimeMonitor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('click_count', function($table)
        {
            $table->integer('register')->default(0);
        });

        Schema::create('hourly_clicks', function($table)
        {
            $table->increments('id');
            $table->integer('hour')->default(0);
            $table->date('date');
            $table->integer('count')->default(0);
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
        //
    }
}
