<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', 50);
            $table->string('email', 50);
            $table->string('usermobile', 20);
            $table->date('userDOB')->nullable();
            $table->string('useraddress', 255);
            $table->char('genderid', 5);
            $table->string('password', 100);
            $table->string('userimage', 255)->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('genderid')->references('id')->on('genders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
