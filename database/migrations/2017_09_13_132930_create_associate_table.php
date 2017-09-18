<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associate', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_advert');
            $table->string('advert_title');
            $table->integer('id_user');
            $table->string('last_name_user');
            $table->string('first_name_user');
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
        Schema::dropIfExists('associate');
    }
}
