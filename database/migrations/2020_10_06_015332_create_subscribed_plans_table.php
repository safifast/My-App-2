<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribedPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribed_plans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name');
            $table->string('plan_id');

            $table->integer('mon1');
            $table->integer('mon2');
            $table->integer('mon3');
            
            $table->integer('tues1');
            $table->integer('tues2');
            $table->integer('tues3');

            $table->integer('wed1');
            $table->integer('wed2');
            $table->integer('wed3');
            
            $table->integer('thur1');
            $table->integer('thur2');
            $table->integer('thur3');

            
            $table->integer('fri1');
            $table->integer('fri2');
            $table->integer('fri3');
            
            $table->integer('sat1');
            $table->integer('sat2');
            $table->integer('sat3');
            
            $table->integer('sun1');
            $table->integer('sun2');
            $table->integer('sun3');

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
        Schema::dropIfExists('subscribed_plans');
    }
}
