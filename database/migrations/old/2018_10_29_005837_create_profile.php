<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('profile_id');
			$table->string('username',30);
			$table->string('firstname',30);
			$table->string('lastname',30);
			$table->string('middlename',30);
			$table->string('gender',10);
			$table->date('birthdate');
			$table->string('birthplace',255);
			$table->string('address',255);
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
        Schema::dropIfExists('profile');
    }
}
