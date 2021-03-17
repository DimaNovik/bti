<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BtnInventories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bti_inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->integer('district');
            $table->string('invent_code');
            $table->text('address');
            $table->string('house_number');
            $table->string('house_building')->nullable();
            $table->string('apartment');
            $table->float('total_area');
            $table->float('main_area');
            $table->float('land_area');
            $table->string('???');
            $table->integer('type');
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
