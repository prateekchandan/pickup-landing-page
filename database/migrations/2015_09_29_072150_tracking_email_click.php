<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrackingEmailClick extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::dropIfExists('click_count');
        Schema::create('click_count', function($table)
        {
            $table->integer('id');
            $table->primary('id');
            $table->string('description',1000)->default("");
            $table->integer('count')->default(0);
            $table->string('type',1000)->default("");
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
