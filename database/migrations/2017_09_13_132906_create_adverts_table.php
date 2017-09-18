<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('user_last_name');
            $table->string('user_first_name');
            $table->double('rent');
            $table->string('address');
            $table->string('city');
            $table->string('postal_code');
            $table->string('surface');
            $table->string('type');
            $table->boolean('furniture');
            $table->integer('piece_nb');
            $table->string('access_mode');
            $table->integer('floor_nb');
            $table->string('vehicle');
            $table->integer('room_nb');
            $table->string('description');
            $table->string('picture');
            $table->string('GES');
            $table->string('energy_class');
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
        Schema::dropIfExists('adverts');
        $table->dropForeign('posts_user_id_foreign');
    }
}
