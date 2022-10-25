<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserregmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userregmodels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name',20);
            $table->string('user_email')->unique();
            $table->string('user_password');
            $table->string('user_phone')->nullable();
            $table->string('user_address')->nullable();
            $table->string('user_image')->nullable();
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
        Schema::dropIfExists('userregmodels');
    }
}
