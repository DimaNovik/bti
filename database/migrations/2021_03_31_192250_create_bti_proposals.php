<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBtiProposals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('proposals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->float('sum');
            $table->integer('copyes');
            $table->integer('type');
            $table->integer('person');
            $table->string('personal_data')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('house_number');
            $table->string('house_building')->nullable();
            $table->string('apartment')->nullable();
            $table->string('office')->nullable();
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
